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
        
       return view('product.index', compact('products','categoryName'));
    }

    public function search(Request $request)
    {

        $query = $request->input('query');

        $products = Product::where('name','like','%'.$query.'%')->paginate(20);

        return view('product.catalog',compact('products'));
    }

    public function show(Product $productId)
    {
        $product = Product::find($productId)->first();
        $categories = $product->categories;

        return view('product.view',compact('product','categories'));
    }

    
}
