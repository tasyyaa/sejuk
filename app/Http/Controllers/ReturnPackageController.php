<?php

namespace App\Http\Controllers;

use App\Models\ReturnPackage;
use App\Models\Order;
use App\Models\ShippingMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReturnPackageController extends Controller
{
    public function create($id)
    {
        $user = Auth::guard('web')->user();
        $query = Order::with('items.catalog.category')->with('vendor')->with('user');
        $query = $query->with('transaction.paymentMethod')->with('shipping.shippingMethod');
        $order = $query->where("id", $id)->first();

        if ($user->id != $order->user_id) {
            abort(403);
        }

        $shippingMethods = ShippingMethod::all();

        return view('return-package.apply', [
            'order'=>$order,
            'shippingMethods' => $shippingMethods
        ]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'no_resi' => ['required', 'string'],
            'shipping_method_id' => ['required', 'integer'],
            'nama_kurir' => ['required', 'string'],
        ]);

        $order = Order::with('vendor')->with('user')->where('id', $id)->first();

        ReturnPackage::create([
            'no_resi' => $request->no_resi,
            'shipping_method_id' => $request->shipping_method_id,
            'nama_kurir' => $request->nama_kurir,
            'order_id' => $id,
            'vendor_address' => $order->vendor->vendor_address ?? '',
            'customer_address' => $order->user->cust_address ?? ''
        ]);

        $order->order_status = Order::SHIPPED_BACK_RETURN;
        $order->save();

        return redirect()->route('orders.user');
    }
}
