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
    
        $product_colors = json_decode($product->colors, true);
        $product_sizes = json_decode($product->sizes, true);
        $gallery_images = json_decode($product->gallery, true);
        $product_tags = json_decode($product->tags, true);
    
        $product_color_string = is_array($product_colors) ? implode(',', $product_colors) : $product->colors;
        $product_size_string = is_array($product_sizes) ? implode(',', $product_sizes) : $product->sizes;

        $cat_id = $product->category_id;
        $relatedProduct = Product::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->limit(4)->get();

        return view('frontend.product.details', compact('product', 'product_color_string', 'product_size_string','gallery_images','product_tags','relatedProduct'));
    }
    
}
