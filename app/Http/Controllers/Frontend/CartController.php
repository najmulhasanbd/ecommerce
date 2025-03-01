<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Cart;

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
}
