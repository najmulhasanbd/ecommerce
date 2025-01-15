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
    protected $unit;
    protected $attributes_value;

    public function __construct(Product $product, Category $category, SubCategory $subcategory, Brand $brand, Supplier $supplier, Attribute $attribute, AttributeValue $attributes_value, Unit $unit)
    {
        $this->product = $product;
        $this->category = $category;
        $this->subcategory = $subcategory;
        $this->brand = $brand;
        $this->unit = $unit;
        $this->supplier = $supplier;
        $this->attribute = $attribute;
        $this->attributes_value = $attributes_value;
    }

    public function index()
    {
        $data = $this->product::with(['category', 'subcategory', 'brand', 'unit'])->latest()->get();

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
            'slug' => Str::slug($request->name, '-'),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'supplier_id' => $request->supplier_id,
            'code' => $request->code,

            'tags' => json_encode($tags),

            'unit_id' => $request->unit_id,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'buying_price' => $request->buying_price,
            'alert_quantity' => $request->alert_quantity,
            'sku' => $request->sku,
            'stock_quantity' => $request->stock_quantity,
            'short_description' => $request->short_description,
            'long_description' => $request->name,

            'status' => $request->has('status'),
            'special_deals' => $request->has('special_deals'),
            'special_offer' => $request->has('special_offer'),
            'featured' => $request->has('featured'),
            'hot_deals' => $request->has('hot_deals'),

            'thumbnail' => $imagePath,
            'gallery' => json_encode($galleryPaths),

            'meta_keywords' => $request->name,
            'meta_title' => $request->name,
            'meta_description' => $request->name,
        ]);

        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $categories = $this->category::where('status', 1)->latest()->get();
        $brands = $this->brand::where('status', 1)->latest()->get();
        $suppliers = $this->supplier::latest()->get();
        $attributes = $this->attribute::latest()->get();
        $attributes_value = $this->attributes_value::latest()->get();
        $units = $this->unit::latest()->get();

        $data = $this->product::findOrFail($id);
        return view('admin.product.edit', compact('data', 'categories', 'brands', 'suppliers', 'attributes', 'attributes_value', 'units'));
    }

    public function update(Request $request, $id)
    {
        $data = $this->product::findOrFail($id);

        // Unlink previous thumbnail if a new one is uploaded
        $imagePath = $data->thumbnail; // Keep existing thumbnail path
        if ($request->hasFile('thumbnail')) {
            if ($data->thumbnail && \Storage::disk('public')->exists('thumbnail/' . $data->thumbnail)) {
                \Storage::disk('public')->delete('thumbnail/' . $data->thumbnail); // Delete the old thumbnail
            }

            $image = $request->file('thumbnail');
            $imageName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('thumbnail', $imageName, 'public'); // Store the new thumbnail
            $imagePath = $imageName; // Set new thumbnail path
        }

        // Unlink previous gallery images if new ones are uploaded
        $galleryPaths = json_decode($data->gallery, true) ?? []; // Keep existing gallery paths
        if ($request->hasFile('gallery')) {
            // Delete old gallery images
            if (!empty($galleryPaths)) {
                foreach ($galleryPaths as $galleryImage) {
                    if (\Storage::disk('public')->exists('gallery/' . $galleryImage)) {
                        \Storage::disk('public')->delete('gallery/' . $galleryImage); // Delete each old image
                    }
                }
            }

            // Save new gallery images
            $galleryPaths = [];
            foreach ($request->file('gallery') as $image) {
                $imageName = Str::slug($request->name) . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                $image->storeAs('gallery', $imageName, 'public'); // Store the image
                $galleryPaths[] = $imageName; // Add the image path to the array
            }
        }

        // Update the product with new data
        $data->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'supplier_id' => $request->supplier_id,
            'code' => $request->code,

            'tags' => json_encode(is_array($request->tags) ? $request->tags : explode(',', $request->tags)),

            'unit_id' => $request->unit_id,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'buying_price' => $request->buying_price,
            'alert_quantity' => $request->alert_quantity,
            'sku' => $request->sku,
            'stock_quantity' => $request->stock_quantity,
            'short_description' => $request->short_description,
            'long_description' => $request->long_description,

            'status' => $request->has('status'),
            'special_deals' => $request->has('special_deals'),
            'special_offer' => $request->has('special_offer'),
            'featured' => $request->has('featured'),
            'hot_deals' => $request->has('hot_deals'),

            'thumbnail' => $imagePath,
            'gallery' => json_encode($galleryPaths),

            'meta_keywords' => $request->meta_keywords,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
        ]);

        $notification = array(
            'message' => 'Product Update Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('product.index')->with($notification);
    }

    public function destroy($id)
    {
        $data = $this->product::findOrFail($id);

        if (file_exists(public_path('storage/thumbnail/' . $data->thumbnail))) {
            unlink(public_path('storage/thumbnail/' . $data->thumbnail));
        }

        if ($data->gallery) {
            $galleryImages = json_decode($data->gallery, true);

            if (is_array($galleryImages)) {
                foreach ($galleryImages as $image) {
                    $imagePath = public_path('storage/gallery/' . $image);

                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
                }
            }
        }

        $data->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully!',
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

    public function featured($id)
    {
        $data = $this->product::where('id', $id)->update(['featured' => 1]);
        $notification = array(
            'message' => 'Product Featured Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function infeatured($id)
    {
        $data = $this->product::where('id', $id)->update(['featured' => 2]);
        $notification = array(
            'message' => 'Product Inactive Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function hot_deals($id)
    {
        $data = $this->product::where('id', $id)->update(['hot_deals' => 1]);
        $notification = array(
            'message' => 'Product Tot Deals Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function inhot_deals($id)
    {
        $data = $this->product::where('id', $id)->update(['hot_deals' => 2]);
        $notification = array(
            'message' => 'Product Hot Deals Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function special_offer($id)
    {
        $data = $this->product::where('id', $id)->update(['special_offer' => 1]);
        $notification = array(
            'message' => 'Product Special Offer Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function inspecial_offer($id)
    {
        $data = $this->product::where('id', $id)->update(['special_offer' => 2]);
        $notification = array(
            'message' => 'Product Special Offer Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function special_deals($id)
    {
        $data = $this->product::where('id', $id)->update(['special_deals' => 1]);
        $notification = array(
            'message' => 'Product Special Deals Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function inspecial_deals($id)
    {
        $data = $this->product::where('id', $id)->update(['special_deals' => 2]);
        $notification = array(
            'message' => 'Product Special Deals Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
