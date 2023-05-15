<?php

namespace App\Http\Controllers;

use App\Models\vendorCatalogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Haruncpi\LaravelIdGenerator\IdGenerator;

class addCostumeController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$vendorCatalog = DB::table('vendorcatalogs')->get();

    	// mengirim data pegawai ke view index
    	return view('vendorCatalog',['vendorcatalogs' => $vendorCatalog]);
    }

    public function create()
    {

	// memanggil view tambah
	return view('addCostume');

    }

    public function store(Request $request)
    {
	// insert data ke table pegawai
        $id = IdGenerator::generate(['table' => 'vendorcatalogs','field'=>'catalog_id', 'length' => 5, 'prefix' =>'CAT']);
        $c = new vendorcatalogs();
        $c->catalog_id = $id;
        $c->item_name = $request -> item_name;
        $c->item_price = $request->item_price;
        $c->size= $request->size;
        $c->stock= $request->stock;
        $c->store = $request->store;
        $c->category_id = $request->category_id;
        $c->catalog_image= $request->file('catalogimage')->store('catalog-image');
        $c->save();

	// alihkan halaman ke halaman pegawai
	return redirect('/vendorCatalog');

    }

    public function hapus($id)
    {
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('vendorcatalogs')->where('catalog_id',$id)->delete();

	// alihkan halaman ke halaman pegawai
	return redirect('/vendorCatalog');
    }
}
