<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function stripeOrder()
    {
        \Stripe\Stripe::setApiKey('sk_test_51QzskFJHWBeYM2ib9kNLzarokIiUAWZ2k5QVcr1dSkaieVd5g55sV5ed3HZDuKUoUlkD8uQqz9xF3jnT0bMw8yKI00HSWdOVQG');

        $token = $_POST['stripeToken'];

        $charge = \Stripe\Charge::create([
            'amount' => 999*100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $token,
            'metadata' => ['order_id' => '6735'],
        ]);

        dd($charge);
    }
}
