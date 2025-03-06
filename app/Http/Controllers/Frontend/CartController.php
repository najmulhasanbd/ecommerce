<?php

namespace App\Http\Controllers\Frontend;

use Cart;
use Carbon\Carbon;
use App\Models\Coupon;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function addToCart(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string',
            'color' => 'nullable|string',
            'size' => 'nullable|string',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($id);

        $price = ($product->discount_price == null) ? $product->selling_price : $product->discount_price;

        Cart::add([
            'id' => $product->id,
            'name' => $request->name,
            'price' => $price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $product->thumbnail,
                'color' => $request->color,
                'size' => $request->size
            ]
        ]);
        return response()->json([
            'success' => true,
            'cart_count' => Cart::getTotalQuantity()
        ]);
    }

    //details page cart
    public function addToCartDetailsP(Request $request, $id)
    {
        $request->validate([
            'name' => 'nullable|string',
            'color' => 'nullable|string',
            'size' => 'nullable|string',
            'quantity' => 'required|integer|min:1'
        ]);

        $product = Product::findOrFail($id);

        $price = ($product->discount_price == null) ? $product->selling_price : $product->discount_price;

        Cart::add([
            'id' => $product->id,
            'name' => $request->name,
            'price' => $price,
            'quantity' => $request->quantity,
            'attributes' => [
                'image' => $product->thumbnail,
                'color' => $request->color,
                'size' => $request->size
            ]
        ]);
        return response()->json([
            'success' => true,
            'cart_count' => Cart::getTotalQuantity()
        ]);
    }

    public function addMiniCart()
    {
        $carts = Cart::getContent();   // ✅ Darryldecode\Cart-এর জন্য getContent() ব্যবহার করুন
        $cartsQty = Cart::getTotalQuantity();  // ✅ মোট আইটেম সংখ্যা
        $cartsTotal = Cart::getTotal(); // ✅ মোট মূল্য

        return response()->json([
            'carts' => $carts,
            'cartsQty' => $cartsQty,
            'cartsTotal' => $cartsTotal
        ]);
    }

    //remove mnicart
    public function removeMiniCart($rowId)
    {
        Cart::remove($rowId);

        return response()->json([
            'success' => 'Product removed successfully!'
        ]);
    }

    public function mycart()
    {
        return view('frontend.cart.index');
    }

    public function getCartProduct()
    {
        $carts = Cart::getContent();   // ✅ Darryldecode\Cart-এর জন্য getContent() ব্যবহার করুন
        $cartsQty = Cart::getTotalQuantity();  // ✅ মোট আইটেম সংখ্যা
        $cartsTotal = Cart::getTotal(); // ✅ মোট মূল্য

        return response()->json([
            'carts' => $carts,
            'cartsQty' => $cartsQty,
            'cartsTotal' => $cartsTotal
        ]);
    }

    //cart remove
    public function cartremove($id)
    {
        Cart::remove($id);
        return response()->json([
            'success' => 'Successfully remove cart product'
        ]);
    }

    //decrement
    public function carrDecrement($id)
    {
        $row = Cart::get($id);

        if ($row && $row->quantity > 1) {
            Cart::update($id, ['quantity' => -1]);

            return response()->json(['success' => true, 'message' => 'Decrement']);
        }

        return response()->json(['success' => false, 'message' => 'Minimum quantity reached']);
    }

    //carIncrement
    public function carIncrement($id)
    {
        $row = Cart::get($id);

        if ($row && $row->quantity > 1) {
            Cart::update($id, ['quantity' => +1]);

            return response()->json(['success' => true, 'message' => 'Decrement']);
        }

        return response()->json(['success' => false, 'message' => 'Minimum quantity reached']);
    }

    //coupon apply
    public function couponApply(Request $request)
    {
        $coupon = Coupon::where('coupon_name', $request->coupon_name)
            ->where('coupon_validity', '>=', Carbon::now()->format('Y-m-d'))
            ->first();

        if ($coupon) {
            $total = Cart::getTotal(); // Get total cart amount

            Session::put('coupon', [
                'coupon_name' => $coupon->coupon_name,
                'coupon_discount' => $coupon->coupon_discount,
                'discount_amount' => round($total * $coupon->coupon_discount / 100),
                'total_amount' => round($total - ($total * $coupon->coupon_discount / 100)),
            ]);

            return response()->json([
                'validity' => true,
                'success' => 'Coupon Applied Successfully'
            ]);
        } else {
            return response()->json(['error' => 'Invalid Coupon']);
        }
    }

    //calculation
    public function couponCalculation()
    {
        if (Session::has('coupon')) {
            return response()->json([
                'subtotal' => Cart::getTotal(), // Fixed method
                'coupon_name' => session()->get('coupon')['coupon_name'],
                'coupon_discount' => session()->get('coupon')['coupon_discount'],
                'discount_amount' => session()->get('coupon')['discount_amount'],
                'total_amount' => session()->get('coupon')['total_amount'],
            ]);
        } else {
            return response()->json([
                'total' => Cart::getTotal(), // Fixed method
            ]);
        }
    }

    public function couponRemove()
    {
        Session::forget('coupon');
        return response()->json(['success' => 'Coupon Removed Successfully']);
    }

    public function checkoutCreate()
    {
        if (Auth::check()) {
            if (Cart::getTotal() > 0) {
                $carts = Cart::getContent();   // ✅ Darryldecode\Cart-এর জন্য getContent() ব্যবহার করুন
                $cartsQty = Cart::getTotalQuantity();  // ✅ মোট আইটেম সংখ্যা
                $cartsTotal = Cart::getTotal(); // ✅ মোট মূল্য

                return view('frontend.checkout.index', compact('carts', 'cartsQty', 'cartsTotal'));
            } else {
                $notification = array(
                    'message' => 'At List one Product.',
                    'alert-type' => 'success'
                );
                return redirect()->to('/')->with($notification);
            }
        } else {
            $notification = array(
                'message' => 'You need login First!',
                'alert-type' => 'success'
            );
            return redirect()->route('banner.index')->with($notification);
        }
    }
}
