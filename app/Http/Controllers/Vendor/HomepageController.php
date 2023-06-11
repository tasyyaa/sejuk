<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Category;

class HomepageController extends Controller
{
    public function homepage()
    {
        $categories = Category::all();

        return view('homepage-vendor.homepage', [
            'categories' => $categories
        ]);
    }
}
