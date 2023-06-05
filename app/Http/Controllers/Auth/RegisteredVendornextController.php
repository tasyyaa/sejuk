<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Rentals;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class RegisteredVendornextController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {
        return view('auth.registervendornext');
    }


    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'oprhours_open' => ['required'],
            'oprhours_close' => ['required'],
            'vendor_address' => ['required', 'string', 'max:100'],
//            'vendor_homephone' =>  ['required', 'string', 'max:15'],
        ]);

        $rental = Auth::user();

        $rental->oprhours_open = $request->oprhours_open;
        $rental->oprhours_close = $request->oprhours_close;
        $rental->vendor_address = $request->vendor_address;
//        $rental->vendor_homephone = $request->vendor_homephone;

        $rental->save();

        return redirect()->route('dashboard.rental');
    }
}
