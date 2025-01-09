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
    public function create() {
        return view('admin.unit.create');
    }
    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|unique:units,name',
        ]);
        $this->unit::create([
            'name'=>$request->name,
            'status'=>1
        ]);

        $notification = array(
            'message' => 'Unit Insert Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('unit.index')->with($notification);
    }
    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function destroy($id) {}
}
