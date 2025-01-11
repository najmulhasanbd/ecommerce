<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Client\Request as ClientRequest;

class Brandcontroller extends Controller
{
    protected $brand;

    public function __construct(Brand $brand)
    {
        $this->brand = $brand;
    }

    public function index()
    {
        $brands = $this->brand::latest()->get();
        return view('admin.brand.index', compact('brands'));
    }

    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(BrandRequest $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:brands,name',
        ]);
        $imagePath = null;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('brands', $imageName, 'public');
            $imagePath = $imageName;
        }

        $this->brand::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imagePath,            
            'status' => 1
        ]);
        $notification = array(
            'message' => 'Brand Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('brand.index')->with($notification);
    }

    public function edit($id)
    {
        $data = $this->brand::findOrFail($id);
        return view('admin.brand.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'string|max:255|unique:brands,name,'
        ]);
        $brand = $this->brand::findOrFail($id);

        $imagePath = $brand->image;

        if ($request->hasFile('image')) {

            if ($brand->image) {
                Storage::disk('public')->delete('brands/' . $brand->image);
            }

            $image = $request->file('image');
            $imageName = Str::slug($request->name) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('brands', $imageName, 'public');

            $imagePath = $imageName;
        }

        $brand->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'image' => $imagePath,
        ]);
        $notification = array(
            'message' => 'Brand Update Success!',
            'alert-type' => 'success'
        );

        return redirect()->route('brand.index')->with($notification);
    }

    public function destroy($id)
    {
        $brand = $this->brand::findOrFail($id);

        if (file_exists(public_path('storage/brands/' . $brand->image))) {
            unlink(public_path('storage/brands/' . $brand->image));
        }
        $brand->delete();

        $notification = array(
            'message' => 'Brand Delete Success!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function active($id)
    {
        $data = $this->brand::where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Brand Active Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('brand.index')->with($notification);
    }
    public function inactive($id)
    {
        $data = $this->brand::where('id', $id)->update(['status' => 2]);
        $notification = array(
            'message' => 'Brand Inactive Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('brand.index')->with($notification);
    }
}
