<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\addaddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CheckController extends Controller
{
    public function myorderlist(){
        $user = Auth::guard('rentals')->user();

        $query = Order::with('items.catalog.category')->with('user')->where('vendor_id', $user->id);

        return view('orders-vendor.orders', [
            'ordersPaid' => $query->where('order_status', Order::PAID)->get(),
            'ordersShipped' => $query->where('order_status', Order::SHIPPED)->get(),
            'ordersReturn' => $query->where(function ($query) {
                return $query->where('order_status', Order::SHIPPED_BACK_RETURN)->orWhere('order_status', Order::SHIPPED_BACK_APPLY_RETURN);
            })->get(),
            'ordersCompleted' =>$query->where(function ($query) {
                return $query->where('order_status', Order::COMPETED_RETURN)->orWhere('order_status', Order::COMPLETD_APPLY_RETURN);
            })->get(),
        ]);
    }

    public function detail() {
        return view('cartOwnerPage');
    }

}
