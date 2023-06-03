<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sunting;
use Illuminate\Support\Facades\DB;


class SuntController extends Controller
{

    public function complete($id)
    {
    	// mengambil data dari users
        $editcustaccount = DB::table('users')->where('id',$id)->get();

        //mengirim data ke view custaccount
        return view('custsunting', ['users' => $editcustaccount]);
    }

    public function create($id)
    {
        $editcustaccount = DB::table('users')->where('id',$id)->get();
        //memanggil view edit


        return view('editcustsunting', ['users' => $editcustaccount]);

    }

    public function store(Request $request)
    {
        //update data ke tabel users

        DB::table('users')->where('id', $request->id)->update([
            'name' => $request->fullname,
            'cust_Creditcardtype1' => $request->mastercard,
            'cust_Creditcardtype2' => $request->visa,
            'phone_number' => $request->phone,
            'cust_homephone' => $request->homephone,
            'cust_address' => $request->address,
            'email' => $request->email,
        ]);

        //alihkan halaman ke halaman cust account
        return redirect('/custsunting');
    }
}
