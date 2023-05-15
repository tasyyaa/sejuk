<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sejuk_bank_account_outcomes;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class acceptPaymentController extends Controller
{
    public function complete()
    {
    	// mengambil data dari table pegawai
    	$payment= DB::table('sejuk_bank_account_outcomes')->get();

    	// mengirim data pegawai ke view index
    	return view('returncomplete',['sejuk_bank_account_outcomes' => $payment]);
    }

    public function create()
    {

	// memanggil view tambah
	return view('acceptpayment');

    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
        $id = IdGenerator::generate(['table' => 'sejuk_bank_account_outcomes','field'=>'outcome_id', 'length' => 5, 'prefix' =>'ACP']);
        $accept= new sejuk_bank_account_outcomes();
        $accept->outcome_id = $id;
        $accept->bank_id = $request -> bank_id;
        $accept->bank_account = $request -> bank_account;
        $accept->order_id = $request->order_id;
        $accept->save();

	// alihkan halaman ke halaman pegawai
	return redirect('/returncomplete');

    }

}
