<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    protected $unit;
    public function __construct(Unit $unit)
    {
        $this->unit = $unit;
    }

    public function index()
    {
        $data = $this->unit::latest()->get();
        return view('admin.unit.index', compact('data'));
    }
    public function create()
    {
        return view('admin.unit.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|unique:units,name',
        ]);
        $this->unit::create([
            'name' => $request->name,
            'status' => 1
        ]);

        $notification = array(
            'message' => 'Unit Insert Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('unit.index')->with($notification);
    }
    public function edit($id)
    {
        $data = $this->unit::findOrFail($id);
        return view('admin.unit.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = $this->unit::findOrFail($id);

        $data->update([
            'name' => $request->name,
            'status' => 1
        ]);

        $notification = array(
            'message' => 'Unit Update Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('unit.index')->with($notification);
    }
    public function destroy($id)
    {
        $data = $this->unit::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'Unit Delete Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('unit.index')->with($notification);
    }

    public function active($id) {
        $data=$this->unit::where('id',$id)->update(['status'=>1]);
        $notification = array(
            'message' => 'Unit Active Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('unit.index')->with($notification);
    }
    public function inactive($id) {
        $data=$this->unit::where('id',$id)->update(['status'=>2]);
        $notification = array(
            'message' => 'Unit Inactive Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('unit.index')->with($notification);
    }
}
