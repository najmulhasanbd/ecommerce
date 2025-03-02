<?php

namespace App\Http\Controllers\admin;

use App\Models\ShipState;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\DivisionRequest;

class ShippingAreaController extends Controller
{
    protected $division;
    protected $district;
    protected $state;

    public function __construct(ShipDivision $division, ShipDistrict $district, ShipState $state)
    {
        $this->division = $division;
        $this->district = $district;
        $this->state = $state;
    }

    public function divisionindex()
    {
        $divisions = $this->division::latest()->get();
        return view('admin.shipping.divisions.index', compact('divisions'));
    }
    public function divisionstore(DivisionRequest $request) {
        $this->division::insert([
            'division_name'=>$request->name
        ]);

        $notification = array(
            'message' => 'Division Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function divisionedit($id) {}
    public function divisionupdate(Request $request, $id) {}
    public function divisiondestroy($id) {}

    public function districtindex() {}
    public function districtcreate() {}
    public function districtstore(Request $request) {}
    public function districtedit($id) {}
    public function districtupdate(Request $request, $id) {}
    public function districtdestroy($id) {}

    public function stateindex() {}
    public function statecreate() {}
    public function statestore(Request $request) {}
    public function stateedit($id) {}
    public function stateupdate(Request $request, $id) {}
    public function statedestroy($id) {}
}
