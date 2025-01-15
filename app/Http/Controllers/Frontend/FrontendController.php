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
        $data['products'] = Product::where('status', 1)->latest()->limit(8)->get();
        $data['featured_products'] = Product::where('status', 1)->where('featured', 1)->latest()->limit(6)->get();
        $data['hot_deals_products'] = Product::where('status', 1)->where('hot_deals', 1)->latest()->limit(6)->get();

        return view('frontend.index', $data);
    }

    public function productpage()
    {
        $data['products'] = Product::where('status', 1)->latest()->get();
        return view('frontend.product.index', $data);
    }
}
