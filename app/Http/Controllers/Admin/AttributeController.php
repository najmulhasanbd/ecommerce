<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use Illuminate\Http\Request;

class AttributeController extends Controller
{
    protected $attribute;
    public function __construct(Attribute $attribute)
    {
        $this->attribute = $attribute;
    }

    public function index()
    {
        $data = $this->attribute::latest()->get();
        return view('admin.attribute.index', compact('data'));
    }

    public function create() {
        return view('admin.attribute.create');
    }
    public function store(Request $request) {
        $data=$this->attribute::create([
            'name'=>$request->name,
        ]);
        $notification = array(
            'message' => 'Attribute Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('attribute.index')->with($notification);
    }
    public function edit() {}
    public function update() {}
    public function destroy($id) {
        $data=$this->attribute::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'Attribute Delete  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('attribute.index')->with($notification);
    }
}
