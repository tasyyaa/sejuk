<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Rentals;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules;

class RegisteredVendorController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.registervendor');
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
        'vendor_store' => ['required', 'string', 'max:100', 'unique:rentals'],
        'vendor_type' => ['required', 'in:Retail,Rental,Seller'],
        'start_time' => ['required'],
        'end_time' => ['required'],
        'vendor_storeaddress' => ['required', 'string', 'max:100'],
    ]);

    $start_time = $request->input('start_time');
    $end_time = $request->input('end_time');

    $vendor_oprhours = $start_time . ' - ' . $end_time;

    $rentals = Rentals::create([
        'vendor_store' => $request->vendor_store,
        'vendor_type' => $request->vendor_type,
        'vendor_oprhours' => $vendor_oprhours,
        'vendor_storeaddress' => $request->vendor_storeaddress,
    ]);

    event(new Registered($rentals));

    Auth::login($rentals);

    return redirect(RouteServiceProvider::HOME);
}

}
