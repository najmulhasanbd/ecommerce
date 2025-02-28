<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    //add to wishlist
    public function addToWishList(Request $request, $product_id)
    {
        if (Auth::check()) {
            $exists = Wishlist::where('user_id', Auth::id())
                ->where('product_id', $product_id)
                ->first();

            if (!$exists) {
                Wishlist::insert([
                    'user_id' => Auth::id(),
                    'product_id' => $product_id,
                    'created_at' => Carbon::now(),
                ]);
                return response()->json(['success' => 'Successfully Added to Wishlist']);
            } else {
                return response()->json(['error' => 'Already Added to Wishlist']);
            }
        } else {
            return response()->json(['error' => 'At First Login Your Account']);
        }
    }

    public function allWishList()
    {
        // $wishlist=Wishlist::latest()->get();
        return view('frontend.wishlist.index');
    }

    public function getWishlistProduct()
    {
        $wishlist = Wishlist::with('product')->where('user_id', Auth::id())->latest()->get();
        $wishQty = Wishlist::where('user_id', Auth::id())->count();

        return response()->json([
            'wishlist' => $wishlist,
            'wishQty' => $wishQty,
        ]);
    }
    //remove wishlist
    public function wishlistRemove($id)
    {
        $wishlist = Wishlist::where('user_id', Auth::id())->where('id', $id)->first();

        if ($wishlist) {
            $wishlist->delete();

            // ✅ ইউজারের বর্তমান Wishlist পণ্যের সংখ্যা বের করুন
            $wishQty = Wishlist::where('user_id', Auth::id())->count();

            return response()->json([
                'success' => 'Successfully Removed Product',
                'wishQty' => $wishQty // ✅ Wishlist কাউন্ট পাঠানো হচ্ছে
            ]);
        } else {
            return response()->json([
                'error' => 'Product Not Found or Unauthorized'
            ], 404);
        }
    }
}
