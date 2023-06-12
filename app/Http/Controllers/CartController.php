<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Vendorcatalogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class CartController extends Controller
{
    public function showCartPage()
    {
        return view('cart.checkout');
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
}
