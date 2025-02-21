<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SubCategory;

class FrontendController extends Controller
{

    protected $product;
    protected $banner;
    protected $category;
    protected $subcategory;

    function __construct(Product $product, Banner $banner, Category $category, SubCategory $subcategory)
    {
        $this->product = $product;
        $this->banner = $banner;
        $this->category = $category;
        $this->subcategory = $subcategory;
    }

    public function index()
    {
        $data['banners'] = $this->banner::where('status', 1)->latest()->get();
        $data['categories'] = $this->category::where('status', 1)->latest()->get();
        $data['products'] = $this->product::with('category')->where('status', 1)->latest()->limit(10)->get();

        $data['featuredProduct'] = $this->product::with('category')->where('featured', 1)->orderby('id', 'desc')->limit(6)->get();

        $data['skipCategory'] = $this->category::skip(0)->first();

        $data['skipProduct'] = $this->product::with('category')
            ->where('category_id', $data['skipCategory']->id)
            ->where('status', 1)
            ->orderBy('id', 'desc')
            ->limit(5)
            ->get();

        $data['hot_deals'] = $this->product::where('hot_deals', 1)->where('status', 1)->where('discount_price', '!=', null)->orderby('id', 'desc')->limit(3)->get();
        $data['special_offer'] = $this->product::where('special_offer', 1)->where('status', 1)->where('discount_price', '!=', null)->orderby('id', 'desc')->limit(3)->get();
        $data['special_deals'] = $this->product::where('special_deals', 1)->where('status', 1)->where('discount_price', '!=', null)->orderby('id', 'desc')->limit(3)->get();
        $data['new'] = $this->product::where('status', 1)->orderby('id', 'desc')->limit(3)->get();

        return view('frontend.index', $data);
    }

    public function ProductDetails($id)
    {
        $product = $this->product::findOrFail($id);

        $product_colors = json_decode($product->colors, true);
        $product_sizes = json_decode($product->sizes, true);
        $gallery_images = json_decode($product->gallery, true);
        $product_tags = json_decode($product->tags, true);

        $product_color_string = is_array($product_colors) ? implode(',', $product_colors) : $product->colors;
        $product_size_string = is_array($product_sizes) ? implode(',', $product_sizes) : $product->sizes;

        $cat_id = $product->category_id;
        $relatedProduct = $this->product::where('category_id', $cat_id)->where('id', '!=', $id)->orderBy('id', 'DESC')->limit(4)->get();

        return view('frontend.product.details', compact('product', 'product_color_string', 'product_size_string', 'gallery_images', 'product_tags', 'relatedProduct'));
    }

    public function categoryproduct(Request $request, $id)
    {
        $categoryproduct = $this->product::where('status', 1)
        ->with('category')
        ->where('category_id', $id)
        ->orderby('id', 'desc')
        ->get();
        $categories=$this->category::where('status',1)->get();
        $category=$this->category::where('id',$request->id)->first();
        return view('frontend.product.category_view',compact('categoryproduct','categories','category'));
    }

    public function subcategoryproduct(Request $request, $id)
    {
        $subcategoryproduct = $this->product::where('status', 1)
        ->with('subcategory')
        ->where('subcategory_id', $id)
        ->orderby('id', 'desc')
        ->get();
        $categories=$this->category::where('status',1)->get();
        $subcategory=$this->subcategory::where('id',$request->id)->first();
        return view('frontend.product.subcategory_view',compact('subcategoryproduct','categories','subcategory'));
    }
}
