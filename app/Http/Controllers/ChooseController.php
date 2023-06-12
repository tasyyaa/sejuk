<?php

namespace App\Http\Controllers;

use App\Models\Vendorcatalogs;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ChooseController extends Controller
{
    public function mypurchases()
    {
        return view('orders.orders');
    }

    public function preview($id)
    {
        $product = Vendorcatalogs::with('category')->with('vendor')->where('catalog_id', $id)->first();

        // mengirim data pegawai ke view index
        return view('catalog.index', ['product' => $product]);
    }
}
