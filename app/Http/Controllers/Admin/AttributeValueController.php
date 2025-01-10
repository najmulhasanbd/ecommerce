<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AttributeValue;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    protected $attributeValue;
    public function __construct(AttributeValue $attributeValue)
    {
        $this->attributeValue = $attributeValue;
    }

    public function index()
    {
        $data = $this->attributeValue::latest()->get();
        return view('admin.attribute-value.index', compact('data'));
    }
    public function create() {
        $data = $this->attributeValue::latest()->get();
        return view('admin.attribute-value.create',compact('data'));
    }
    public function store(Request $request) {
        $this->attributeValue::create([
            'name'=>$request->name,
            'status'=>1
        ]);
        $notification = array(
            'message' => 'Value Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function edit() {}
    public function update() {}
    public function destroy($id) {
        $data=$this->attributeValue::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'Value Delete  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
