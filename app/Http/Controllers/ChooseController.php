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
            'ordersShipped' => with(clone $query)->where('order_status', Order::SHIPPED)->get(),
            'ordersReturn' => with(clone $query)->where(function ($query) {
                return $query->where('order_status', Order::SHIPPED_BACK_RETURN)->orWhere('order_status', Order::SHIPPED_BACK_APPLY_RETURN);
            })->get(),
            'ordersCompleted' => with(clone $query)->where(function ($query) {
                return $query->where('order_status', Order::COMPETED_RETURN)->orWhere('order_status', Order::COMPLETD_APPLY_RETURN);
            })->get(),
        ]);
    }

    public function preview($id)
    {
        $product = Vendorcatalogs::with('category')->with('vendor')->where('catalog_id', $id)->first();

        // mengirim data pegawai ke view index
        return view('catalog.index', ['product' => $product]);
    }
}
