<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Vendorcatalogs;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    public function homepage()
    {
        $user = Auth::guard('rentals')->user();
        $categories = Category::all();

        if (is_string(request()->query('q'))) {
            $query = request()->query('q');
            $products = Vendorcatalogs::with('category')->where('vendor_id', $user->id)
                ->where('item_name', 'like', '%'. $query . '%')->get();
        } else {
            $products = Vendorcatalogs::with('category')->where('vendor_id', $user->id)->get();
        }

        return view('homepage-vendor.homepage', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
