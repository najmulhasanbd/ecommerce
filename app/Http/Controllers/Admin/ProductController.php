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

        $imagePath = null;

        if ($request->hasFile('thumbnail')) {
            $image = $request->file('thumbnail');
            $imageName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('thumbnail', $imageName, 'public');
            $imagePath = $imageName;
        }

        $tags = [];
        if ($request->has('tags')) {
            $tags = is_array($request->tags) ? $request->tags : explode(',', $request->tags);
        }
        $galleryPaths = [];

        if ($request->hasFile('gallery')) {
            foreach ($request->file('gallery') as $image) {
                $imageName = Str::slug($request->name) . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('gallery', $imageName, 'public');  // Store the image
                $galleryPaths[] = $imageName;  // Add the image path to the array
            }
        }

        $this->product::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name,'-'),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'supplier_id' => $request->supplier_id,
            'code' => $request->code,

            'tags' => json_encode($tags), 

            'unit' => $request->unit,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'buying_price' => $request->buying_price,
            'alert_quantity' => $request->alert_quantity,
            'sku' => $request->sku,
            'stock_quantity' => $request->stock_quantity,
            'short_description' => $request->short_description,
            'long_description' => $request->name,

            'status' => $request->has('status'), // Ensure it's a boolean (true or false)
            'special_deals' => $request->has('special_deals'), // Ensure it's a boolean (true or false)
            'special_offer' => $request->has('special_offer'), // Ensure it's a boolean (true or false)
            'featured' => $request->has('featured'), // Ensure it's a boolean (true or false)
            'hot_deals' => $request->has('hot_deals'), // Ensure it's a boolean (true or false)

            'thumbnail' => $imagePath,
            'gallery' => json_encode($galleryPaths),  

            'meta_keywords' => $request->name,
            'meta_title' => $request->name,
            'meta_description' => $request->name,
        ]);

        return redirect()->route('product.index');
    }

    public function edit() {}

    public function update() {}

    public function destroy($id)
{
    // Find the product by ID
    $data = $this->product::findOrFail($id);

    // Check and delete the thumbnail if it exists
    if (file_exists(public_path('storage/thumbnail/' . $data->thumbnail))) {
        unlink(public_path('storage/thumbnail/' . $data->thumbnail));
    }

    // Check and delete the gallery images if they exist
    if ($data->gallery) {
        $galleryImages = json_decode($data->gallery, true); // Decode the gallery JSON to get an array of image paths
        
        if (is_array($galleryImages)) {
            foreach ($galleryImages as $image) {
                $imagePath = public_path('storage/gallery/' . $image);

                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete each gallery image
                }
            }
        }
    }

    // Delete the product record
    $data->delete();

    // Prepare success notification
    $notification = array(
        'message' => 'Product Deleted Successfully!',
        'alert-type' => 'success'
    );

    // Redirect back with the success message
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
