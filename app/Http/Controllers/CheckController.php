<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\addaddress;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class CheckController extends Controller
{

    public function myorderlist(){

        return view ('myOrderList');
    }

    public function complete()
    {
    	// mengambil data dari add address
        $add_addresses = DB::table('add_addresses')->get();

        //mengirim data ke view address
        return view('address', ['add_addresses' => $add_addresses]);
    }

    public function create()
    {
        //memanggil view tambah
        return view('addaddress');
    }

    public function store(Request $request)
    {
        //insert data ke tabel add address
        $id = IdGenerator::generate(['table' => 'add_addresses', 'field'=>'custaddress_id', 'length'=>5, 'prefix'=>'ADRS']);
        $address = new addaddress();
        $address->custaddress_id = $id;
        $address->custaddress_name = $request -> custaddress_name;
        $address->cust_address = $request -> cust_address;
        $address->cust_city = $request -> cust_city;
        $address->cust_province = $request -> cust_province;
        $address->cust_phonenumber = $request -> cust_phonenumber;
        $address->save();

        //alihkan halaman ke halaman address
        return redirect('/address');
    }
}
