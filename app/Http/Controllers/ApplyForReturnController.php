<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\ShippingMethod;
use Illuminate\Http\Request;
use App\Models\ApplyForReturn;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ApplyForReturnController extends Controller
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

        return view('apply-for-return.apply', ['order'=>$order,
            'shippingMethods' => $shippingMethods
        ]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'no_resi' => ['required', 'string'],
            'shipping_method_id' => ['required', 'integer'],
            'nama_kurir' => ['required', 'string'],
            'reason' => ['required', 'string'],
            'product_image' => ['required', 'image']
        ]);

        $imagePath = Storage::disk('public')->put('apply-returns', $request->file('product_image'));

        $order = Order::with('vendor')->with('user')->where('id', $id)->first();

        ApplyForReturn::create([
            'no_resi' => $request->no_resi,
            'shipping_method_id' => $request->shipping_method_id,
            'nama_kurir' => $request->nama_kurir,
            'reason' => $request->reason,
            'product_image' => $imagePath,
            'order_id' => $id,
            'vendor_address' => $order->vendor->vendor_address ?? '',
            'customer_address' => $order->user->cust_address ?? ''
        ]);

        $order->order_status = Order::SHIPPED_BACK_APPLY_RETURN;
        $order->save();

	    return redirect()->route('orders.user');
    }
}
