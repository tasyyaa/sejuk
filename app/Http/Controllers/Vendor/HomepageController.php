<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;

class HomepageController extends Controller
{
    public function homepage()
    {
        return view('homepage-vendor.homepage');
    }
}
