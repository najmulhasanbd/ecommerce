<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    protected $banner;

    public function __construct(Banner $banner)
    {
        $this->banner = $banner;
    }
    public function index()
    {
        $data = $this->banner::latest()->get();
        return view('admin.banner.index', compact('data'));
    }
    public function create()
    {
        return view('admin.banner.create');
    }
    public function store(Request $request)
    {
        $imagePath = null;
      if ($request->hasFile('banner')) {
            $image = $request->file('banner');
            $imageName = 'banner_' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('banner', $imageName, 'public');
            $imagePath = $imageName;
        }

        $banner = $this->banner::create([
            'banner' => $imagePath,
            'status' => 1
        ]);
        $notification = array(
            'message' => 'Banner Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('banner.index')->with($notification);
    }
    
    public function edit($id)
    {
        $data = $this->banner::findOrFail($id);
        return view('admin.banner.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $banner = $this->banner::findOrFail($id);

        $imagePath = $banner->banner;

        if ($request->hasFile('banner')) {

            if ($banner->banner) {
                Storage::disk('public')->delete('banner/' . $banner->banner);
            }

            $image = $request->file('banner');
            $imageName = 'banner_' . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('banner', $imageName, 'public');

            $imagePath = $imageName;
        }
        $banner->update([
            'banner' => $imagePath,
        ]);
        $notification = array(
            'message' => 'Banner Update  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('banner.index')->with($notification);
    }
    public function destroy($id)
    {
        $data = $this->banner::findOrFail($id);

        if (file_exists(public_path('storage/banner/' . $data->banner))) {
            unlink(public_path('storage/banner/' . $data->banner));
        }

        $data->delete();

        $notification = array(
            'message' => 'Banner Delete  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('banner.index')->with($notification);
    }
    public function active($id)
    {
        $data = $this->banner::where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Banner Active Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('banner.index')->with($notification);
    }
    public function inactive($id)
    {
        $data = $this->banner::where('id', $id)->update(['status' => 2]);
        $notification = array(
            'message' => 'Banner Inactive Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('banner.index')->with($notification);
    }
}
