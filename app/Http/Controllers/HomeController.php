<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
Use DB as DB;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

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
    public function category($id=null)
    {
        if($id == null){
            $sub_categories= \App\Category::All();
        } else {
            $sub_categories= \App\Category::where('parent_id', $id)->get();
        }

        $category= view('category');
        $category->sub_categories = $sub_categories;
        return $category;

    }

    //Product page
    public function product($id=null)
    {
        if($id == null){
            $product_details = \App\Product::all();

        } else {
            $product_details = \App\Product::find($id);
        }


        $product = view('product/product');
        $product->product_details = $product_details;
        return $product;
    }

    public function sub_categories($id)
    {
        $products = \App\Category::find($id)->products;

            $sub_category = view('category.sub_categories',  compact(['products']));

            return $sub_category;
    }

    public function checkout()
    {

        $orderid =request()->input('product_id', null);
        $orderprice =request()->input('price', null);


        $checkoutid = DB::table('checkouts')->insertGetId([
            'product_id' => $orderid,
            'price' =>$orderprice,
            'date' => date('Y-m-d H:i:s')
        ]);
        $ordered= \App\Product::find($orderid);

        $checkout = view('checkout', compact(['ordered']));
        return $checkout;
    }
}
