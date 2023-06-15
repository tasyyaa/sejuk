<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Vendorcatalogs;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    public function mypurchases()
    {
        $user = Auth::guard('web')->user();

        $query = Order::with('items.catalog.category')->with('vendor')->where('user_id', $user->id);

        return view('orders.orders', [
            'ordersPaid' => with(clone $query)->where('order_status', Order::PAID)->get(),
            'ordersShipped' => with(clone $query)->where(function ($query) {
                return $query->where('order_status', Order::SHIPPED)->orWhere('order_status', Order::RECEIVED);
            })->get(),
            'ordersReturn' => with(clone $query)->where(function ($query) {
                return $query->where('order_status', Order::SHIPPED_BACK_RETURN)->orWhere('order_status', Order::SHIPPED_BACK_APPLY_RETURN);
            })->get(),
            'ordersCompleted' => with(clone $query)->where(function ($query) {
                return $query->where('order_status', Order::COMPETED_RETURN)->orWhere('order_status', Order::COMPLETD_APPLY_RETURN);
            })->get(),
        ]);
    }

    public function view($id) {
        $user = Auth::guard('web')->user();
        $query = Order::with('items.catalog.category')->with('vendor');
        $query = $query->with('transaction.paymentMethod')->with('shipping.shippingMethod');
        $query = $query->with('applyReturn.shippingMethod')->with('returnPackage.shippingMethod');
        $query = $query->with('formReturnPayment.sejukBankAccountOutcome')->with('formAcceptPayment.sejukBankAccountOutcome');
        $order = $query->where("id", $id)->first();

        if ($user->id != $order->user_id) {
            abort(403);
        }

        return view('orders.detail', [
            'order' => $order
        ]);
    }

    public function confirm($id) {
        $order = Order::with('vendor')->with('user')->where('id', $id)->first();
        $order->order_status = Order::RECEIVED;
        $order->save();

        return redirect()->route('orders.user');
    }

    public function preview($id)
    {
        $product = Vendorcatalogs::with('category')->with('vendor')->where('catalog_id', $id)->first();

        // mengirim data pegawai ke view index
        return view('catalog.index', ['product' => $product]);
    }
}
