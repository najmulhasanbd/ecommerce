<?php

namespace App\Http\Controllers\Admin;

use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SEO;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    protected $setting;
    protected $seo;
    public function __construct(Setting $setting, SEO $seo)
    {
        $this->setting = $setting;
        $this->seo = $seo;
    }

    public function website()
    {
        $data = $this->setting::first();
        return view('admin.settings.website', compact('data'));
    }

    public function websiteUpdate(Request $request, $id)
    {
        $data = $this->setting::findOrFail($id);

        $logoPath = $data->logo;
        if ($request->hasFile('logo')) {
            if ($data->logo && file_exists(public_path('storage/logo/' . $data->logo))) {
                unlink(public_path('storage/logo/' . $data->logo));
            }

            $logo = $request->file('logo');
            $logoName = 'logo.' . $logo->getClientOriginalExtension();
            $logo->storeAs('logo', $logoName, 'public');
            $logoPath = $logoName;
        }

        $faviconPath = $data->favicon;
        if ($request->hasFile('favicon')) {
            if ($data->favicon && file_exists(public_path('storage/favicon/' . $data->favicon))) {
                unlink(public_path('storage/favicon/' . $data->favicon));
            }

            $favicon = $request->file('favicon');
            $faviconName = 'favicon.' . $favicon->getClientOriginalExtension();
            $favicon->storeAs('favicon', $faviconName, 'public');
            $faviconPath = $faviconName;
        }


        $data->update([
            'email' => $request->email,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
            'description' => $request->description,
            'logo' => $logoPath,
            'favicon' => $faviconPath,
        ]);
        $notification = array(
            'message' => 'Website Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    public function seo()
    {
        $data = $this->seo::first();
        return view('admin.settings.seo', compact('data'));
    }

    public function seoUpdate(Request $request, $id)
    {
        $data = $this->seo::findOrFail($id);

        $data->update([
            'meta_title' => $request->meta_title,
            'meta_author' => $request->meta_author,
            'meta_tag' => $request->meta_tag,
            'meta_description' => $request->meta_description,
            'meta_keywords' => $request->meta_keywords,
            'google_verification' => $request->google_verification,
            'google_analytics' => $request->google_analytics,
            'alexa_varification' => $request->alexa_varification,
        ]);

        $notification = array(
            'message' => 'SEO Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);

    }
}
