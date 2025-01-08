<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    protected $category;
    protected $subcategory;
    protected $brand;

    public function __construct(Product $product, Category $category, SubCategory $subcategory, Brand $brand)
    {
        $this->product = $product;
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->brand = $brand;
    }

    public function index()
    {
        $data = $this->product::latest()->get();
        return view('admin.product.index', compact('data'));
    }

    public function create()
    {
        $categories = $this->category::latest()->get();
        $subcategories = $this->subcategory::latest()->get();
        $brands = $this->brand::latest()->get();
        return view('admin.product.create');
    }

    public function store(ProductRequest $product) {}

    public function edit() {}

    public function update() {}

    public function destroy() {}
}
