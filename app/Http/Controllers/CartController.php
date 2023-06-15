<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\PaymentMethod;
use App\Models\Shipping;
use App\Models\ShippingMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Response;

class CartController extends Controller
{
    public function showCartPage()
    {
        $user = auth()->guard('web')->user();

        if ($user->cust_address === null || $user->cust_homephone === null) {
            return redirect()->route('profile');
        }

        $carts = Cart::with('catalog.vendor')->with('catalog.category')->where('user_id', $user->id)->get();
        $shippingMethods = ShippingMethod::all();

        $subtotal = 0;

        foreach ($carts as $cart) {
            $subtotal += $cart->catalog->item_price*$cart->amount;
        }

        $paymentMethods = PaymentMethod::all()->collect()->groupBy('category');

        return view('cart.checkout', [
            'carts' => $carts,
            'shippingMethods' => $shippingMethods,
            'paymentGroups' => $paymentMethods,
            'subtotal' => $subtotal
        ]);
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'catalog_id' => ['required', 'integer'],
            'amount' => ['required', 'integer', 'gt:0'],
        ]);

        $user = Auth::guard('web')->user();

        Cart::create([
            'user_id' => $user->id,
            'amount' => $request->amount,
            'catalog_id' => $request->catalog_id
        ]);

        return back();
    }

    public function deleteCart($id)
    {
        $user = Auth::guard('web')->user();
        $cart = Cart::where('id', $id)->first();

        if ($cart->user_id != $user->id) {
            return Response::deny('forbidden');
        }

        Cart::where('id', $id)->delete();

        return back();
    }
}
