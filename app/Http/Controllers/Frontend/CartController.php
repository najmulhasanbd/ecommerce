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
}
