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
        $editcustaccount = DB::table('users')->where('Id',$id)->get();

        //mengirim data ke view custaccount
        return view('custsunting', ['users' => $editcustaccount]);
    }

    public function create()
    {
        //memanggil view edit
        return view('editcustsunting');
    }

    public function store(Request $request)
    {
        //insert data ke tabel users
        DB::table('users')->insert([
            'name' => $request->fullname,
            'cust_Creditcardtype1' => $request->mastercard,
            'cust_Creditcardtype2' => $request->visa,
            'phone_number' => $request->phone,
            'cust_homephone' => $request->homephone,
            'cust_address' => $request->address,
            'email' => $request->email,
        ]);

        //alihkan halaman ke halaman cust account belum kelar idnya
        return redirect('/custsunting/{id}');

    }
}
