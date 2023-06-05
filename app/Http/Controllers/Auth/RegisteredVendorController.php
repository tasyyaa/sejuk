<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Rentals;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:rentals'],
            'city'=> ['required', 'string', 'max:255'],
            'phone_number'=> ['required', 'string', 'max:15'],
            'vendor_store' => ['required', 'string', 'max:100', 'unique:rentals'],
            'vendor_type' => ['required', 'in:Retail,Rental,Seller'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $rentals = Rentals::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'vendor_store' => $request->vendor_store,
            'vendor_type' => $request->vendor_type,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($rentals);

        return redirect()->route('registervendornext');
}

}
