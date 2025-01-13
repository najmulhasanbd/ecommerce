<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplierRequest;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    protected $supplier;
    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    public function index()
    {
        $data = $this->supplier::latest()->get();
        return view('admin.supplier.index', compact('data'));
    }
    public function create()
    {
        return view('admin.supplier.create');
    }
    public function store(SupplierRequest $request)
    {
        $validated = $request->validate([
            'mobile' => 'required|unique:suppliers,mobile',
        ]);
        $this->supplier::create([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
        ]);

        $notification = array(
            'message' => 'Supplier Insert Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('supplier.index')->with($notification);
    }
    public function edit($id)
    {
        $data = $this->supplier::findOrFail($id);
        return view('admin.supplier.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = $this->supplier::findOrFail($id);
        $data->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'address' => $request->address,
        ]);
        $notification = array(
            'message' => 'Supplier Update Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('supplier.index')->with($notification);
    }
    public function destroy($id)
    {
        $data = $this->supplier::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'Supplier Delete Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('supplier.index')->with($notification);
    }
}
