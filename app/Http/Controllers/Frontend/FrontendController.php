<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Category;
use App\Models\Product;

class FrontendController extends Controller
{

    public function index()
    {
        $data['banners'] = Banner::where('status', 1)->latest()->get();
        $data['categories'] = Category::where('status', 1)->latest()->get();
        $data['products'] = Product::with('category')->where('status', 1)->latest()->limit(10)->get();
        // $data['featured_products'] = Product::where('status', 1)->where('featured', 1)->latest()->limit(6)->get();
        // $data['hot_deals_products'] = Product::where('status', 1)->where('hot_deals', 1)->latest()->limit(6)->get();

        return view('frontend.index', $data);
    }

    public function ProductDetails($id)
    {
        $product = Product::findOrFail($id);

        $color = $product->colors;
        $product_color = explode(',', $color);

        $size = $product->sizes;
        $product_size = explode(',', $size);


        return view('frontend.product.details', compact('product','product_color','product_size'));
    }
}
