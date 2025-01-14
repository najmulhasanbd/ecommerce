<?php

namespace App\Http\Controllers\Admin;

use App\Models\Unit;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Attribute;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\AttributeValue;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    protected $product;
    protected $category;
    protected $subcategory;
    protected $brand;
    protected $supplier;
    protected $attribute;
    protected $attributes_value;
    protected $unit;

    public function __construct(Product $product, Category $category, SubCategory $subcategory, Brand $brand, Supplier $supplier, Attribute $attribute, AttributeValue $attributes_value, Unit $unit)
    {
        $this->product = $product;
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->brand = $brand;
        $this->supplier = $supplier;
        $this->attribute = $attribute;
        $this->attributes_value = $attributes_value;
        $this->unit = $unit;
    }

    public function index()
    {
        $data = $this->product::with(['category', 'subcategory', 'brand'])->with('brand')->latest()->get();
        return view('admin.product.index', compact('data'));
    }

    public function create()
    {
        $categories = $this->category::where('status', 1)->latest()->get();
        $brands = $this->brand::where('status', 1)->latest()->get();
        $suppliers = $this->supplier::latest()->get();
        $attributes = $this->attribute::latest()->get();
        $attributes_value = $this->attributes_value::latest()->get();
        $units = $this->unit::latest()->get();
        return view('admin.product.create', compact('categories',  'brands', 'suppliers', 'attributes', 'attributes_value', 'units'));
    }

    public function store(Request $request)
    {
        $thumbnailPath = [];

        if ($request->hasFile('thumbnail')) {
            foreach ($request->file('thumbnail') as $image) {
                $imageName = Str::slug($request->name) . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('thumbnail', $imageName, 'public');
                $thumbnailPath[] = $imageName;
            }
            $thumbnailPath = implode(',', $thumbnailPath);
        }
        $this->product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'code' => $request->code,
            'qty' => $request->qty ? json_encode($request->qty) : null,
            'supplier' => $request->supplier_id,
            'tags' => $request->tags ? json_encode($request->tags) : null,
            'size' => $request->size ? json_encode($request->size) : null,
            'color' => $request->color ? json_encode($request->color) : null,
            'unit' => $request->unit,
            'sku' => $request->sku ? json_encode($request->sku) : null,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'buying_price' => $request->buying_price,
            'stock_quantity' => $request->stock_quantity,
            'alert_quantity' => $request->alert_quantity,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,
            'hot_deals' => $request->hot_deals ? 1 : 0,
            'featured' => $request->featured ? 1 : 0,
            'special_offer' => $request->special_offer ? 1 : 0,
            'special_deals' => $request->special_deals ? 1 : 0,
            'status' => $request->status ? 1 : 0,
            'meta_keywords' => $request->meta_keywords,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'thumbnail' => $thumbnailPath,
            'gallery' => $request->gallery ? json_encode($request->gallery) : null, // JSON কনভার্ট
        ]);

        return redirect()->route('product.index')->with('success', 'Product created successfully!');
    }

    public function edit() {}

    public function update() {}

    public function destroy($id)
    {
        $data = $this->product::findOrFail($id);

        $data->delete();
        $notification = array(
            'message' => 'Product Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        $data = $this->product::where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Product Active Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function inactive($id)
    {
        $data = $this->product::where('id', $id)->update(['status' => 2]);
        $notification = array(
            'message' => 'Product Inactive Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
