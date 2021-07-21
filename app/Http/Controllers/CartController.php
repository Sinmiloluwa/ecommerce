<?php

namespace App\Http\Controllers;

use Cart;
use session;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;
use Darryldecode\Cart\CartCondition;

class CartController extends Controller
{
    //
    public function add(Product $product){

        // dd($product->id,$product->name,$product->price);
        //add to cart

        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'image' => $product->cover_img,
            'attributes' => array(),
            'associatedModel' => $product,
        ));

        return redirect()->route('cart.index');

    }

    public function index(){

        $items = \Cart::session(auth()->id())->getContent();
        return view('cart.index', compact('items'));
    }

    public function destroy($itemId){

        \Cart::session(auth()->id())->remove($itemId);

        return back();
    }

    public function update($productId){
        \Cart::session(auth()->id())->update($productId, [
            'quantity' => array(
                'relative' => false,
                'value' => request('quantity')
            )
        ]);
            return back();
    }

    public function checkout(){
        $items = \Cart::session(auth()->id())->getContent();
        if ($items->isNotEmpty()) {
            
            return view('cart.checkout');
             
        }
        return back()->withMessage('Cart is empty');
    }

    public function applyCoupon()
    {
        $couponCode = request('coupon_code');

        $couponData = Coupon::where('code', $couponCode)->first();

        if(!$couponData) {
            return back()->withMessage('Sorry! Coupon does not exist');
            
        }
        $condition = new \Darryldecode\Cart\CartCondition(array(
            'name' => $couponData->name,
            'type' => $couponData->type,
            'target' => 'total',
            'value' => $couponData->value
        ));

        \Cart::session(auth()->id())->condition($condition);

        return back()->withMessage('Coupon applied');
    }
}
