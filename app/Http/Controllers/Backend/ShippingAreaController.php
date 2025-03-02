<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ShipDistrict;
use App\Models\ShipDivision;
use App\Models\ShipState;
use Illuminate\Http\Request;

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

    public function divisionindex() {}
    public function divisioncreate() {}
    public function divisionstore(Request $request) {}
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
