<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{

    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->latest()->get();
        return view('admin.category.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(CategoryRequest $request)
    {
        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('categories', $imageName, 'public');
            $imagePath = $imageName;
        }

        $this->category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imagePath,
            'status' => 1
        ]);
        $notification = array(
            'message' => 'Category Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }

    public function edit($id)
    {
        $data = $this->category::findOrFail($id);
        return view('admin.category.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $category = $this->category::findOrFail($id);

        $imagePath = $category->image;

        if ($request->hasFile('image')) {

            if ($category->image) {
                Storage::disk('public')->delete('categories/' . $category->image);
            }

            $image = $request->file('image');
            $imageName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('categories', $imageName, 'public');

            $imagePath = $imageName;
        }

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imagePath,
        ]);

        $notification = array(
            'message' => 'Category Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('category.index')->with($notification);
    }

    public function destroy($id)
    {
        $data = $this->category::findOrFail($id);
        if (file_exists(public_path('storage/categories/' . $data->image))) {
            unlink(public_path('storage/categories/' . $data->image));
        }

        $data->delete();

        $notification = array(
            'message' => 'Category Delete Success!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function active($id)
    {
        $data = $this->category::where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Category Active Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }
    public function inactive($id)
    {
        $data = $this->category::where('id', $id)->update(['status' => 2]);
        $notification = array(
            'message' => 'Category Inactive Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('category.index')->with($notification);
    }
}
