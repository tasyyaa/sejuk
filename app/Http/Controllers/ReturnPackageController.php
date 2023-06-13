<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\returnpackage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class ReturnPackageController extends Controller
{
    public function complete()
    {
    	// mengambil data dari table pegawai
    	$returnpackages = DB::table('returnpackages')->get();

    	// mengirim data pegawai ke view index
    	return view('returnpackagecomplete',['returnpackages' => $returnpackages]);
    }

    public function view($id) {
        $user = Auth::guard('web')->user();
        $query = Order::with('items.catalog.category')->with('vendor');
        $query = $query->with('transaction.paymentMethod')->with('shipping.shippingMethod');
        $query = $query->with('applyReturn.shippingMethod')->with('returnPackage.shippingMethod');
        $order = $query->where("id", $id)->first();

        if ($user->id != $order->user_id) {
            abort(403);
        }

        return view('orders.detail', [
            'order' => $order
        ]);
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
