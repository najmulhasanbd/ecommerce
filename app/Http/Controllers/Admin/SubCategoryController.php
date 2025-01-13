<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use App\Http\Requests\SubCategoryRequest;
use Illuminate\Http\Client\Request as ClientRequest;

class SubCategoryController extends Controller
{
    protected $subcategory;
    protected $category;

    public function __construct(SubCategory $subcategory, Category $category)
    {
        $this->category = $category;
        $this->subcategory = $subcategory;
    }

    public function index()
    {
        $subcategory = $this->subcategory::with('category')->latest()->get();
        return view('admin.subcategory.index', compact('subcategory'));
    }

    public function create()
    {
        $categories = $this->category::latest()->get();
        return view('admin.subcategory.create', compact('categories'));
    }

    public function store(SubCategoryRequest $request)
    {

        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('subcategories', $imageName, 'public');
            $imagePath = $imageName;
        }

        $this->subcategory::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'image' => $imagePath,
            'status' => 1
        ]);
        $notification = array(
            'message' => 'SubCategory Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('subcategory.index')->with($notification);
    }

    public function edit($id)
    {
        $categories = $this->category::latest()->get();
        $data = $this->subcategory::findOrFail($id);
        return view('admin.subcategory.edit', compact('categories', 'data'));
    }

    public function update(Request $request, $id)
    {
        $subcategory = $this->subcategory::findOrFail($id);
        $imagePath = $subcategory->image;
        if ($request->hasFile('image')) {
            if ($subcategory->image) {
                Storage::disk('public')->delete('subcategories/' . $subcategory->image);
            }
            $image = $request->file('image');
            $imageName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('subcategories', $imageName, 'public');
            $imagePath = $imageName;
        }
        $subcategory->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imagePath,
        ]);
        $notification = array(
            'message' => 'SubCategory Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('subcategory.index')->with($notification);
    }

    public function destroy($id)
    {
        $data = $this->subcategory::findOrFail($id);

        if (file_exists(public_path('storage/subcategories/' . $data->image))) {
            unlink(public_path('storage/subcategories/' . $data->image));
        }

        $data->delete();

        $notification = array(
            'message' => 'SubCategory Delete  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        $data = $this->subcategory::where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'SubCategory Active Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('subcategory.index')->with($notification);
    }
    public function inactive($id)
    {
        $data = $this->subcategory::where('id', $id)->update(['status' => 2]);
        $notification = array(
            'message' => 'SubCategory Inactive Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('subcategory.index')->with($notification);
    }
    public function subcategoryajax($category_id)
    {
        $subcategories = SubCategory::where('category_id', $category_id)->get();

        // Return response as JSON
        return response()->json($subcategories);
    }
    
}
