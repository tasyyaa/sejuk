<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Rentals;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class SuntController extends Controller
{

    public function complete()
    {
        $user = Auth::guard('rentals')->user();

        //mengirim data ke view custaccount
        return view('profile-vendor.profile', ['user' => $user]);
    }

    public function create()
    {
        $user = Auth::guard('rentals')->user();

        return view('profile-vendor.edit-profile', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('rentals')->ignore(Auth::guard('rentals')->user()->id, 'id')],
            'city'=> ['nullable', 'string', 'max:255'],
            'phone_number'=> ['required', 'string', 'max:20'],
            'vendor_Creditcardtype1' => ['nullable', 'string', 'numeric'],
            'vendor_Creditcardtype2' => ['nullable', 'string', 'numeric'],
            'vendor_homephone' => ['nullable', 'string', 'numeric'],
            'vendor_address' => ['nullable', 'string']
        ]);

        $user = Auth::guard('rentals')->user();

        if ($user instanceof Rentals) {
            $user->name = $request->name;
            $user->city = $request->city;
            $user->phone_number = $request->phone_number;
            $user->vendor_Creditcardtype1 = $request->vendor_Creditcardtype1;
            $user->vendor_Creditcardtype2 = $request->vendor_Creditcardtype2;
            $user->vendor_homephone = $request->vendor_homephone;
            $user->vendor_address = $request->vendor_address;
            $user->save();
        }

        //alihkan halaman ke halaman cust account
        return redirect()->route('profile.vendor');
    }
}
