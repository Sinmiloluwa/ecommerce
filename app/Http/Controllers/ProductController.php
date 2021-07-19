<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoryId = request('category_id');
        $categoryName = null;

        if($categoryId)
        {
            $category = Category::find($categoryId);
            $categoryName = ucfirst($category->name);

            $products = $category->allProducts();
        } else
        {
            $products = Product::take(8)->get();
        }
        $newArrivals = Product::orderBy('created_at', 'DESC')->paginate(3);
        $shuffle = Product::all()->shuffle();
       return view('home', compact('products','newArrivals','shuffle'));
    }

    public function search(Request $request)
    {

        $query = $request->input('query');

        $products = Product::where('name','LIKE',"%$query%")->paginate(20);

        return view('product.catalog',compact('products'));
    }
}
