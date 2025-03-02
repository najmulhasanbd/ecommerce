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
    public function divisionedit($id) {
        $division=$this->division::findOrFail($id);
    }
    public function divisionupdate(DivisionRequest $request, $id) {
        $division = $this->division::findOrFail($id);
        $division->update([
            'division_name' => $request->name
        ]);

        $notification = array(
            'message' => 'Division Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


    public function divisiondestroy($id) {
        $division=$this->division::findOrFail($id);
        $division->delete();

        $notification = array(
            'message' => 'Division Delete  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


//district
    public function districtindex() {
        $divisions = $this->division::all();
        $districts = $this->district::with('division')->latest()->get();
        return view('admin.shipping.districts.index', compact('districts', 'divisions'));
    }

    public function districtstore(Request $request) {
        $this->district::insert([
            'division_id'=>$request->division_id,
            'district_name'=>$request->district_name
        ]);

        $notification = array(
            'message' => 'District Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function districtedit($id) {
        $district = ShipDistrict::findOrFail($id);
        $divisions = ShipDivision::all();

        return view('admin.shipping.districts.edit', compact('district', 'divisions'));
    }
    public function districtupdate(Request $request, $id) {
        $district = ShipDistrict::findOrFail($id);

        $district->update([
            'division_id'   => $request->division_id,
            'district_name' => $request->district_name
        ]);

        return redirect()->back()->with([
            'message' => 'District Updated Successfully!',
            'alert-type' => 'success'
        ]);
    }

    public function districtdestroy($id) {
        $district=$this->district::findOrFail($id);
        $district->delete();

        $notification = array(
            'message' => 'District Delete  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }


    //state
    public function ajaxDistrict($division_id)
    {
        $districts = ShipDistrict::where('division_id', $division_id)->get();

        return response()->json($districts);
    }


    public function stateindex() {
        $divisions = ShipDivision::all();
        $districts = ShipDistrict::all();
        $states = ShipState::latest()->get();
        return view('admin.shipping.state.index', compact('districts', 'divisions', 'states'));
    }

    public function statecreate(){
        $divisions = ShipDivision::all();
        $districts = ShipDistrict::all();

        return view('admin.shipping.state.create',compact('divisions','districts'));
    }

    public function statestore(Request $request) {
        $this->state::insert([
            'division_id'=>$request->division_id,
            'district_id'=>$request->district_id,
            'state_name'=>$request->state_name
        ]);

        $notification = array(
            'message' => 'State Insert  Success!',
            'alert-type' => 'success'
        );
        return redirect()->route('state.index')->with($notification);
    }
    public function stateedit($id) {
        $state=$this->state::findOrFail($id);
        $divisions = ShipDivision::all();
        $districts = ShipDistrict::all();

        return view('admin.shipping.state.edit',compact('divisions','districts','state'))
    }
    public function stateupdate(Request $request, $id) {}
    public function statedestroy($id) {
        $stats=$this->state::findOrFail($id);
        $stats->delete();

        $notification = array(
            'message' => 'State Delete  Success!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
