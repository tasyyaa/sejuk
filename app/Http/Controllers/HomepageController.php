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

        if (is_string(request()->query('q'))) {
            $query = request()->query('q');
            $clothProducts = Vendorcatalogs::with('category')->where('category_id', 'CLT')
                ->where('item_name', 'like', '%'. $query . '%')
                ->get();
            $costumeProducts = Vendorcatalogs::with('category')->where('category_id', 'CST')
                ->where('item_name', 'like', '%'. $query . '%')
                ->get();
        } else {
            $clothProducts = Vendorcatalogs::with('category')->where('category_id', 'CLT')->get();
            $costumeProducts = Vendorcatalogs::with('category')->where('category_id', 'CST')->get();
        }

        return view('homepage.homepage', [
            'clothProducts' => $clothProducts,
            'costumeProducts' => $costumeProducts
        ]);
    }
}
