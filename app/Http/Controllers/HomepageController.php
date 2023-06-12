<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Vendorcatalogs;

class HomepageController extends Controller
{
    public function view()
    {
        if (auth()->guard('rentals')->check()) {
            return redirect()->route('homepage.vendor');
        }

        $clothProducts = Vendorcatalogs::with('category')->where('category_id', 'CLT')->get();
        $costumeProducts = Vendorcatalogs::with('category')->where('category_id', 'CST')->get();
        return view('homepage.homepage', [
            'clothProducts' => $clothProducts,
            'costumeProducts' => $costumeProducts
        ]);
    }
}