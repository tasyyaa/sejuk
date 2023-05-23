<?php

namespace App\Http\Controllers;
use App\Models\vendorcatalogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class chooseController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$vendorcatalogs= DB::table('vendorcatalogs')->paginate(16);

    	// mengirim data pegawai ke view index
    	return view('costumepage',['vendorcatalogs' => $vendorcatalogs]);
    }

    public function preview($id){
        $vendorcatalogs= DB::table('vendorcatalogs')->where('catalog_id',$id)->get();;

    	// mengirim data pegawai ke view index
    	return view('clothespreview',['vendorcatalogs' => $vendorcatalogs]);
    }
}
