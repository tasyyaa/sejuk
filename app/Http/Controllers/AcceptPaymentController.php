<?php

namespace App\Http\Controllers;

use App\Models\FormAcceptPayment;
use App\Models\Order;
use App\Models\SejukBankAccountOutcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AcceptPaymentController extends Controller
{
    public function create($id)
    {
        $query = Order::with('items.catalog.category')->with('vendor')->with('user');
        $query = $query->with('transaction.paymentMethod')->with('shipping.shippingMethod');
        $query = $query->with('applyReturn.shippingMethod')->with('returnPackage.shippingMethod');
        $order = $query->where("id", $id)->first();

        $user = Auth::guard('rentals')->user();

        if ($user->id != $order->vendor_id) {
            abort(403);
        }

        return view('accept-payment.accept', ['order' => $order]);
    }

    public function store(Request $request, $id)
    {
        $request->validate([
            'bank_account_name' => ['required', 'string'],
            'bank_account_number' => ['required', 'string'],
            'bank_name' => ['required', 'string']
        ]);

        $user = Auth::guard('rentals')->user();

        $query = Order::with('items.catalog.category')->with('vendor')->with('user');
        $query = $query->with('transaction.paymentMethod')->with('shipping.shippingMethod');
        $query = $query->with('applyReturn')->with('returnPackage');
        $order = $query->where("id", $id)->first();

        if ($user->id != $order->vendor_id) {
            abort(403);
        }

        if ($order->order_status != Order::SHIPPED_BACK_RETURN) {
            abort(400);
        }

        $transferAmount = $order->total_price - $order->shipping->price;

        $bankOutcome = SejukBankAccountOutcome::create([
            'bank_name' => $request->bank_name,
            'bank_account_name' => $request->bank_account_name,
            'bank_account_number' => $request->bank_account_number,
            'transfer_amount' => $transferAmount
        ]);

        FormAcceptPayment::create([
            'order_id' => $order->id,
            'sejuk_bank_account_outcome_id' => $bankOutcome->id
        ]);

        $order->order_status = Order::COMPETED_RETURN;

        foreach($order->items as $item) {
            $item->catalog->stock += $item->amount;
            $item->catalog->save();
        }

        $order->save();

        return redirect()->route('order.vendor', ['id' => $order->id]);
    }
}
