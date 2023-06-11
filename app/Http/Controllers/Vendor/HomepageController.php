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
        $products = Vendorcatalogs::with('category')->where('vendor_id', $user->id)->get();

        return view('homepage-vendor.homepage', [
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
