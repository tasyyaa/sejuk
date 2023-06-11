<?php

namespace App\Http\Controllers;

use App\Models\Vendorcatalogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class chooseController extends Controller
{
    public function mypurchases()
    {
        return view('myPurchases');
    }

    public function indexclothes()
    {
        // mengambil data dari table pegawai
        $vendorcatalogs = DB::table('vendorcatalogs')->where('category_id', 'ACS')->paginate(16);

        // mengirim data pegawai ke view index
        return view('clothespage', ['vendorcatalogs' => $vendorcatalogs]);
    }

    public function preview($id)
    {
        $vendorcatalogs = DB::table('vendorcatalogs')->where('catalog_id', $id)->get();
        ;

        // mengirim data pegawai ke view index
        return view('clothespreview', ['vendorcatalogs' => $vendorcatalogs]);
    }
}
