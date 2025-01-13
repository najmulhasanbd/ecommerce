<?php

namespace App\Http\Controllers\Admin;

use App\Models\SEO;
use App\Models\Page;
use App\Models\SMTP;
use App\Models\Setting;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Shipping;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    protected $setting;
    protected $seo;
    protected $smtp;
    protected $page;
    protected $shipping;
    public function __construct(Setting $setting, SEO $seo, SMTP $smtp, Page $page, Shipping $shipping)
    {
        $this->setting = $setting;
        $this->seo = $seo;
        $this->smtp = $smtp;
        $this->shipping = $shipping;
        $this->page = $page;
    }

    //website setting
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
            'name' => $request->name,
            'copyright' => $request->copyright,
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

    //seo setting
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

    //smtp setting
    public function smtp()
    {
        $data = $this->smtp::first();
        return view('admin.settings.smtp', compact('data'));
    }

    public function smtpUpdate(Request $request, $id)
    {
        $data = $this->smtp::findOrFail($id);

        $data->update([
            'mailer' => $request->mailer,
            'host' => $request->host,
            'port' => $request->port,
            'user_name' => $request->user_name,
            'password' => $request->mailer
        ]);

        $notification = array(
            'message' => 'SMTP Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    //page setting
    public function page()
    {
        $data = $this->page::latest()->get();
        return view('admin.settings.page.index', compact('data'));
    }
    public function create()
    {
        return view('admin.settings.page.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:pages,name',
        ]);

        $this->page::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'title' => $request->title,
            'description' => $request->description,
        ]);
        $notification = array(
            'message' => 'Page Create Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('setting.page')->with($notification);
    }

    public function edit($id)
    {
        $data = $this->page::findOrFail($id);
        return view('admin.settings.page.edit', compact('data'));
    }

    public function pageupdate(Request $request, $id)
    {
        $data = $this->page::findOrfail($id);
        $data->page::update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'title' => $request->title,
            'description' => $request->description,
        ]);
        $notification = array(
            'message' => 'Page Create Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('setting.page')->with($notification);
    }

    public function destroy($id)
    {
        $data = $this->page::findOrFail($id);
        $data->delete();
        $notification = array(
            'message' => 'Page Destroy Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }

    //shipping
    public function shipping()
    {
        $data = $this->shipping::latest()->get();
        return view('admin.settings.shipping.index', compact('data'));
    }

    public function shippingcreate()
    {
        return view('admin.settings.shipping.create');
    }

    public function shippingstore(Request $request)
    {

        $this->shipping::create([
            'name' => $request->name,
            'location' => $request->location,
            'charge' => $request->charge,
            'time' => $request->time,
            'time' => $request->time,
            'status' => 1,
        ]);

        $notification = array(
            'message' => 'Shipping Insert Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('setting.shipping')->with($notification);
    }

    public function shippingedit($id)
    {
        $data = $this->shipping::findOrFail($id);
        return view('admin.settings.shipping.edit', compact('data'));
    }

    public function shippingupdate(Request $request, $id)
    {
        $data = $this->shipping::findOrFail($id);

        $data->update([
            'name' => $request->name,
            'location' => $request->location,
            'charge' => $request->charge,
            'time' => $request->time,
            'status' => 1,
        ]);

        $notification = array(
            'message' => 'Shipping Updated Successfully!',
            'alert-type' => 'success',
        );

        return redirect()->route('setting.shipping')->with($notification);
    }


    public function shippingdestroy($id)
    {
        $data = $this->shipping::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'Shipping Delete Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('setting.shipping')->with($notification);
    }
}
