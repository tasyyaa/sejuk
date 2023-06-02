<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\applyforreturn;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class applyForReturnController extends Controller
{
    public function complete()
    {
    	// mengambil data dari table pegawai
    	$applyforreturns= DB::table('applyforreturns')->get();

    	// mengirim data pegawai ke view index
    	return view('applyforreturncomplete',['applyforreturns' => $applyforreturns]);
    }

    public function create()
    {

	// memanggil view tambah
	return view('applyforreturn');

    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
        $id = IdGenerator::generate(['table' => 'applyforreturns','field'=>'apply_id', 'length' => 5, 'prefix' =>'AFR']);
        $return = new applyforreturn();
        $return->apply_id = $id;
        $return->shipping_methods = $request -> shipping_methods;
        $return->name_kurir = $request->name_kurir;
        $return->no_resi= $request->no_resi;
        $return->vendor_storeaddress = $request->vendor_storeaddress;
        $return->reason = $request->reason;
        $return->product_image= $request->file('productimage')->store('post-images');
        $return->order_id = $request->order_id;
        $return->save();

	// alihkan halaman ke halaman pegawai
	return redirect('/applyforreturncomplete');

    }

   
}
