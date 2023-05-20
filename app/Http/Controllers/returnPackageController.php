<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\returnpackage;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class returnPackageController extends Controller
{
    // public function index()
    // {
    // 	// mengambil data dari table pegawai
    // 	$ordersummary = DB::table('order')->get();

    // 	// mengirim data pegawai ke view index
    // 	return view('',['ordersummary' => $ordersummary]);
    // }

    public function complete()
    {
    	// mengambil data dari table pegawai
    	$returnpackages = DB::table('returnpackages')->get();

    	// mengirim data pegawai ke view index
    	return view('returnpackagecomplete',['returnpackages' => $returnpackages]);
    }

    public function view(){
        // $orders = DB::table('orders')->get();
        // DB::table('returnpackages')->where('return_id',$id)->view();
        return view('ordersummary');
    }

    public function viewconf(){

        return view('ordersummaryconfirmed');
    }

    public function create()
    {

	// memanggil view tambah
	return view('returnpackage');

    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
        $id = IdGenerator::generate(['table' => 'returnpackages','field'=>'return_id', 'length' => 5, 'prefix' =>'RTP']);
        $return = new returnpackage();
        $return->return_id = $id;
        $return->shipping_methods = $request -> shipping_methods;
        $return->name_kurir = $request->name_kurir;
        $return->no_resi= $request->no_resi;
        $return->vendor_storeaddress = $request->vendor_storeaddress;
        $return->order_id = $request->order_id;
        $return->save();

	// alihkan halaman ke halaman pegawai
	return redirect('/returnpackagecomplete');

    }
}
