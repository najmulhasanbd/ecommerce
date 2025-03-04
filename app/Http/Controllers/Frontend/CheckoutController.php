<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkoutStore(Request $request)
    {
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_email'] = $request->shipping_email;
        $data['division_id'] = $request->division_id;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['district_id'] = $request->district_id;
        $data['post_code'] = $request->post_code;
        $data['state_id'] = $request->state_id;
        $data['shipping_address'] = $request->shipping_address;
        $data['note'] = $request->note;
        $cartTotal = Cart::getTotal();

        if ($request->payment_option == 'stripe') {
            return view('frontend.payment.stripe',compact('data','cartTotal'));
        } elseif ($request->payment_option == 'card') {
            return 'card page';
        } else {
            return view('frontend.payment.cash',compact('data','cartTotal'));
        }
    }
}
