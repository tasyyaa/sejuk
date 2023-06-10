<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class SuntController extends Controller
{

    public function complete()
    {
        $user = Auth::guard('web')->user();

        //mengirim data ke view custaccount
        return view('profile.profile', ['user' => $user]);
    }

    public function create()
    {
        $user = Auth::guard('web')->user();

        return view('profile.edit-profile', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore(Auth::guard('web')->user()->id, 'id')],
            'city'=> ['required', 'string', 'max:255'],
            'phone_number'=> ['required', 'string', 'max:20'],
            'cust_Creditcardtype1' => ['nullable', 'string', 'numeric'],
            'cust_Creditcardtype2' => ['nullable', 'string', 'numeric'],
            'cust_homephone' => ['nullable', 'string', 'numeric'],
            'cust_address' => ['nullable', 'string']
        ]);

        $user = Auth::guard('web')->user();

        if ($user instanceof User) {
            $user->name = $request->name;
            $user->city = $request->city;
            $user->phone_number = $request->phone_number;
            $user->cust_Creditcardtype1 = $request->cust_Creditcardtype1;
            $user->cust_Creditcardtype2 = $request->cust_Creditcardtype2;
            $user->cust_homephone = $request->cust_homephone;
            $user->cust_address = $request->cust_address;
            $user->save();
        }

        //alihkan halaman ke halaman cust account
        return redirect()->route('profile');
    }
}
