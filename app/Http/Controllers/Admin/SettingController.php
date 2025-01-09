<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $setting;
    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }

    public function website()
    {
        $data = $this->setting::first();
        return view('admin.settings.website', compact('data'));
    }
}
