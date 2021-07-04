<?php

namespace App\Http\Controllers;

use session;
use App\Models\Product;
use Illuminate\Http\Request;

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
            'attributes' => array(),
            'associatedModel' => $product
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
        return view('cart.checkout');
    }
}
