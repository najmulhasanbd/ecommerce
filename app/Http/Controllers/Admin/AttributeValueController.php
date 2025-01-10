<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attribute;
use App\Models\AttributeValue;
use Illuminate\Http\Request;

class AttributeValueController extends Controller
{
    protected $attributeValue;
    protected $attribute;
    public function __construct(AttributeValue $attributeValue, Attribute $attribute)
    {
        $this->attributeValue = $attributeValue;
        $this->attribute = $attribute;
    }

    // public function index()
    // {
    //     $data = $this->attributeValue::latest()->get();
    //     return view('admin.attribute-value.index', compact('data'));
    // }
    public function create($id)
    {
        $attribute = $this->attribute::findOrFail($id);

        $data = $this->attributeValue::where('attribute_id', $id)->latest()->get();

        return view('admin.attribute-value.create', compact('data', 'attribute'));
    }

    public function store(Request $request)
    {
        $this->attributeValue::create([
            'name' => $request->name,
            'attribute_id' => $request->attribute_id,
            'status' => 1
        ]);

        $notification = array(
            'message' => 'Value Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function edit($id)
    {
        $data = $this->attributeValue::findOrFail($id);
        return view('admin.attribute-value.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = $this->attributeValue::findOrFail($id);
        $data->update([
            'name' => $request->name,
        ]);
        $notification = array(
            'message' => 'Value Update  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function destroy($id)
    {
        $data = $this->attributeValue::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'Value Delete  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function active($id)
    {
        $data = $this->attributeValue::where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Value Active Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function inactive($id)
    {
        $data = $this->attributeValue::where('id', $id)->update(['status' => 2]);
        $notification = array(
            'message' => 'Value Inactive Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
