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
        $this->coupon=$coupon;
    }
    public function index(){}
    public function create(){}
    public function store(Request $request){}
    public function edit($id){}
    public function update(Request $request, $id){}
    public function destroy($id){}
}
