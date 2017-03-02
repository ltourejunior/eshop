<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
Use DB as DB;

class HomeController extends Controller
{
    //Homepage

    public function homepage()
    {
        $categories=DB::table('categories')
            ->where('parent_id', null)
            ->pluck('name', 'id');

        $top_products=DB::table('products')
            ->where('is_top', 1)
            ->pluck('name', 'id');

        $homepage = view('homepage');
        $homepage->categories = $categories;
        $homepage->top_products = $top_products;

        return $homepage;

    }

    //Category page
    public function category($id)
    {
        $sub_categories= \App\Category::where('parent_id', $id)->get();
        $category= view('category');
        $category->sub_categories = $sub_categories;
        return $category;

    }

    //Product page
    public function product($id)
    {
        $product_detail = \App\Product::find($id);

        $product = view('product/product');
        $product->product_details = $product_detail;
        return $product;
    }

    public function sub_categories($id)
    {
        $hasproducts = \App\Product::find($id)->hasproducts;
       foreach ($hasproducts as $hasproduct) {

           $products = \App\Product::where('id',$hasproduct->product_id )->get();
           $sub_category = view('category/sub_categories');
           $sub_category->products= $products;
           echo $sub_category;
           //echo $products;
       }
       // dd($hasproduct);

       //dd($hascat);
       //$products = \App\Product::where('id',$hascat )->get();
//($products);
       // $sub_category = view('category/sub_categories');
       // $sub_category->products= $products;

       // return $sub_category;
    }
}
