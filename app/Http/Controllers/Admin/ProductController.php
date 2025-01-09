<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;
    protected $category;
    protected $subcategory;
    protected $brand;
    protected $supplier;

    public function __construct(Product $product, Category $category, SubCategory $subcategory, Brand $brand, Supplier $supplier)
    {
        $this->product = $product;
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->brand = $brand;
        $this->supplier = $supplier;
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
        $suppliers=$this->supplier::latest()->get();
        return view('admin.product.create',compact('categories','subcategories','brands','suppliers'));
    }

    public function store(ProductRequest $product) {}

    public function edit() {}

    public function update() {}

    public function destroy() {}
}
