<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Rentals;
use App\Models\Shipping;
use App\Models\ShippingMethod;
use App\Models\Transaction;
use App\Models\Vendorcatalogs;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {

    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'shipping_method_id' => ['required', 'integer', 'gt:0'],
            'payment_method_id' => ['required', 'integer', 'gt:0']
        ]);

        $user = auth()->guard('web')->user();
        $carts = Cart::with('catalog')->where('user_id', $user->id)->get();

        if (count($carts) == 0) {
            return back();
        }

        $isSame = true;
        $hasStock = true;

        $subtotal = 0;

        foreach ($carts as $cart) {
            if ($cart->catalog->vendor_id != $carts[0]->catalog->vendor_id) {
                $isSame = false;
            }

            if ($cart->amount > $cart->catalog->stock) {
                $hasStock = false;
            }

            $subtotal+=$cart->catalog->item_price*$cart->amount;
        }

        $shippingMethod = ShippingMethod::where('id', $request->shipping_method_id)->first();
        $total = $subtotal + $shippingMethod->price;

        if (!$isSame) {
            return back()->withErrors('Katalog pada cart harus berasal dari toko yang sama');
        }

        if (!$hasStock) {
            return back()->withErrors('Stok tidak cukup');
        }

        // buat order
        $order = Order::create([
            'user_id' => $user->id,
            'vendor_id' => $carts[0]->catalog->vendor_id,
            'total_price' => $total,
            'order_status' => 'PAID'
        ]);

        // buat order item, kurangi stok
        foreach ($carts as $cart) {
            OrderItem::create([
                'order_id' => $order->id,
                'catalog_id' => $cart->catalog_id,
                'amount' => $cart->amount,
                'price' => $cart->catalog->item_price
            ]);

            $cart->catalog->stock -= $cart->amount;
            $cart->catalog->save();
        }

        // buat transaction
        Transaction::create([
            'payment_method_id' => $request->payment_method_id,
            'total_price' => $total,
            'order_id' => $order->id
        ]);

        $vendor = Rentals::where('id', $carts[0]->catalog->vendor_id)->first();

        // buat pengiriman
        Shipping::create([
            'order_id' => $order->id,
            'shipping_method_id' => $request->shipping_method_id,
            'customer_address' => $user->cust_address . ' ' . $user->city . ' ' . $user->cust_homephone,
            'vendor_address' => $vendor->vendor_address . ' ' . $vendor->city . ' ' . $vendor->vendor_homephone,
            'price' => $shippingMethod->price
        ]);

        Cart::where('user_id', $user->id)->delete();

        return back();
    }
}
