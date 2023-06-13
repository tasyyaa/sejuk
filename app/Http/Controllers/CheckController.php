<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckController extends Controller
{
    public function myorderlist(){
        $user = Auth::guard('rentals')->user();

        $query = Order::with('items.catalog.category')->with('user')->where('vendor_id', $user->id);

        return view('orders-vendor.orders', [
            'ordersPaid' => with(clone $query)->where('order_status', Order::PAID)->get(),
            'ordersShipped' => with(clone $query)->where('order_status', Order::SHIPPED)->get(),
            'ordersReturn' => with(clone $query)->where(function ($query) {
                return $query->where('order_status', Order::SHIPPED_BACK_RETURN)->orWhere('order_status', Order::SHIPPED_BACK_APPLY_RETURN);
            })->get(),
            'ordersCompleted' => with(clone $query)->where(function ($query) {
                return $query->where('order_status', Order::COMPETED_RETURN)->orWhere('order_status', Order::COMPLETD_APPLY_RETURN);
            })->get(),
        ]);
    }

    public function detail($id) {
        $user = Auth::guard('rentals')->user();
        $query = Order::with('items.catalog.category')->with('vendor')->with('user');
        $query = $query->with('transaction.paymentMethod')->with('shipping.shippingMethod');
        $order = $query->where("id", $id)->first();

        if ($user->id != $order->vendor_id) {
            abort(403);
        }
        return view('orders-vendor.detail', ['order'=>$order]);
    }

    public function ship(Request $request, $id) {
        $order = Order::with('shipping')->where('id', $id)->first();
        $vendor = auth()->guard('rentals')->user();

        $request->validate([
            'no_resi' => ['required', 'string']
        ]);

        if ($order === null || $order->vendor_id !== $vendor->id) {
            abort(400);
        }

        $order->shipping->no_resi = $request->no_resi;
        $order->shipping->save();
        $order->order_status = Order::SHIPPED;
        $order->save();

        return back();
    }
}
