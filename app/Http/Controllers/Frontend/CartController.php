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
            'options' => [
                'image' => $product->thumbnail,
                'color' => $request->color,
                'size' => $request->size
            ]
        ]);

        return response()->json([
            'success' => true,
            'message' => '✅ পণ্য সফলভাবে কার্টে যোগ হয়েছে!',
            'cart_count' => Cart::getTotalQuantity()
        ]);
    }
}
