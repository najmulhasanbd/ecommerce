<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    protected $coupon;

    public function __construct(Coupon $coupon)
    {
        $this->coupon = $coupon;
    }
    public function index()
    {
        $data = $this->coupon::latest()->get();
        return view('admin.coupon.index', compact('data'));
    }
    public function create()
    {
        return view('admin.coupon.create');
    }
    public function store(Request $request)
    {
        $this->coupon::create([
            'code' => $request->code,
            'type' => $request->type,
            'amount' => $request->amount,
            'expireDate' => $request->expireDate,
            'status' => 2
        ]);

        $notification = array(
            'message' => 'Coupon Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('coupon.index')->with($notification);
    }
    public function edit($id)
    {
        $data = $this->coupon::findOrFail($id);
        return view('admin.coupon.edit', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = $this->coupon::findOrFail($id);

        $data->update([
            'code' => $request->code,
            'type' => $request->type,
            'amount' => $request->amount,
            'expireDate' => $request->expireDate,
        ]);

        $notification = array(
            'message' => 'Coupon Update Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('coupon.index')->with($notification);
    }
    public function destroy($id)
    {
        $data = $this->coupon::findOrFail($id);
        $data->delete();

        $notification = array(
            'message' => 'Coupon Delete  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function active($id)
    {
        $data = $this->coupon::where('id', $id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Coupon Active Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('coupon.index')->with($notification);
    }
    public function inactive($id)
    {
        $data = $this->coupon::where('id', $id)->update(['status' => 2]);
        $notification = array(
            'message' => 'Coupon Inactive Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('coupon.index')->with($notification);
    }
}
