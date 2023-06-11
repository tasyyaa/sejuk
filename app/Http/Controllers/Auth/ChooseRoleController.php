<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ChooseRoleController extends Controller
{
    public function login()
    {
        return view('auth.chooserole', ['type' => 'login']);
    }

    public function register()
    {
        return view('auth.chooserole', ['type'=>'register']);
    }
}


