<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Vendorcatalogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    public function mypurchases()
    {
        $query = Order::with('items.catalog.category')->with('vendor');

        return view('orders.orders', [
            'ordersPaid' => $query->where('order_status', 'PAID')->get(),
            'ordersShipped' => $query->where('order_status', 'SHIPPED')->get(),
            'ordersReturn' => $query->where('order_status', 'RETURNED')->get(),
            'ordersCompleted' => $query->where('order_status', 'COMPLETED')->get()
        ]);
    }

    public function preview($id)
    {
        $product = Vendorcatalogs::with('category')->with('vendor')->where('catalog_id', $id)->first();

        // mengirim data pegawai ke view index
        return view('catalog.index', ['product' => $product]);
    }
}
