<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;

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

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imagePath,
        ]);

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }
    public function destroy(Category $category)
    {
        if (file_exists(public_path('storage/categories/' . $category->image))) {
            unlink(public_path('storage/categories/' . $category->image));
        }

        $category->delete();

        return redirect()->back()->with('success', 'Category deleted successfully.');
    }
}
