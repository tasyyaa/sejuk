<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sejuk_bank_account_outcomes;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;


class returnPaymentController extends Controller
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
	return view('returnpayment');

    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
        $id = IdGenerator::generate(['table' => 'sejuk_bank_account_outcomes','field'=>'outcome_id', 'length' => 5, 'prefix' =>'RCP']);
        $accept= new sejuk_bank_account_outcomes();
        $accept->outcome_id = $id;
        $accept->bank_id = $request -> bank_id;
        $accept->bank_account = $request -> bank_account;
        $accept->amount= (int)$request -> amount;
        $accept->returnpay_img= $request -> file('returnpayment')->store('returnpayment');
        $accept->order_id = $request->order_id;
        $accept->save();

        $messages = [
            'min' => ':attribute must be at least :min digit',
            'max' => ':attribute cannot be at greater than :max digit'
        ];

        $this->validate($request,[
            'bank_account' => 'integer|digits_between:10,16',
            'amount' => 'integer',
        ]);
	// alihkan halaman ke halaman pegawai
	return redirect('/returnpaymentprocess');

    }

    public function rip($id){
        $payment= DB::table('sejuk_bank_account_outcomes')->where('outcome_id', $id)->get();

        return view('returnpaymentprocess',['sejuk_bank_account_outcomes' => $payment]);
    }

    public function rps(){
        return view('/returnpaymentsuccess');
    }

}
