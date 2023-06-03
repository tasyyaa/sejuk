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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'city'=> ['required', 'string', 'max:255'],
            'phone_number'=> ['required', 'string', 'max:15'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $rentals = Rentals::create([
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        // Store the form data in the session
        $formData = [
            'name' => $request->name,
            'email' => $request->email,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
        ];
        session(['registervendor' => $formData]);

        return redirect()->route('registervendornext');
    }
}

