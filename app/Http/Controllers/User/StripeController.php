<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Cart;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class StripeController extends Controller
{
    public function stripeOrder(Request $request)
    {

        if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        } else {
            $total_amount = round(Cart::getTotal());
        }

        \Stripe\Stripe::setApiKey('sk_test_51QzskFJHWBeYM2ib9kNLzarokIiUAWZ2k5QVcr1dSkaieVd5g55sV5ed3HZDuKUoUlkD8uQqz9xF3jnT0bMw8yKI00HSWdOVQG');

        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
            'amount' => $total_amount * 100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
            'metadata' => ['order_id' => uniqid()],
        ]);

        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_id' => $request->state_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'post_code' => $request->post_code,
            'note' => $request->note,
            'payment_type' => $charge->payment_method,
            'payment_method' => 'Stripe',
            'transaction_id' => $charge->balance_transaction,
            'currency' => $charge->currency,
            'amount' => $total_amount,
            'order_number' => $charge->metadata->order_id,
            'invoice_no' => mt_rand(100000000, 999999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_year' => Carbon::now()->format('F'),
            'confirm_date' => Carbon::now()->format('Y'),
            'status' => 'pending',
            'created_at' => Carbon::now(),
        ]);

        $carts = Cart::getContent();
        foreach ($carts as $cart) {
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'color' => $cart->attributes->color,
                'size' => $cart->attributes->size,
                'quantity' => $cart->quantity,
                'price' => $cart->price,
                'created_at' => Carbon::now(),
            ]);
        }
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        Cart::clear(); 

        $notification = array(
            'message' => 'Your Order Place Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('dashboard')->with($notification);
    }

    public function cashOrder(Request $request)
    {

        if (Session::has('coupon')) {
            $total_amount = Session::get('coupon')['total_amount'];
        } else {
            $total_amount = round(Cart::getTotal());
        }



        $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'division_id' => $request->division_id,
            'district_id' => $request->district_id,
            'state_id' => $request->state_id,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'post_code' => $request->post_code,
            'note' => $request->note,
            'payment_type' => 'Cash on Delivery',
            'payment_method' => 'Cash on Delivery',
            'currency' => 'USD',
            'amount' => $total_amount,
            
            'invoice_no' => mt_rand(100000000, 999999999),
            'order_date' => Carbon::now()->format('d F Y'),
            'order_year' => Carbon::now()->format('F'),
            'confirm_date' => Carbon::now()->format('Y'),
            'status' => 'pending',
            'created_at' => Carbon::now(),
        ]);

        $carts = Cart::getContent();
        foreach ($carts as $cart) {
            OrderItem::insert([
                'order_id' => $order_id,
                'product_id' => $cart->id,
                'color' => $cart->attributes->color,
                'size' => $cart->attributes->size,
                'quantity' => $cart->quantity,
                'price' => $cart->price,
                'created_at' => Carbon::now(),
            ]);
        }
        if (Session::has('coupon')) {
            Session::forget('coupon');
        }
        Cart::clear(); 

        $notification = array(
            'message' => 'Your Order Place Successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('dashboard')->with($notification);
    }
}
