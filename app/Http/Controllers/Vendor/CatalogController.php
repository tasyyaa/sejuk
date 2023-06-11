<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Vendorcatalogs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CatalogController extends Controller
{
    public function create()
    {
        // memanggil view tambah
        return view('add-catalog.add-catalog', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'item_name' => ['required', 'string', 'max:100'],
            'item_price' => ['required', 'integer', 'gt:0'],
            'size'=> ['required', 'string', 'max:20'],
            'stock'=> ['required', 'integer', 'gte:0'],
            'category_id' => ['required', 'string', 'max:10'],
            'catalog_image' => ['required', 'image']
        ]);

        Vendorcatalogs::create([
            'item_name' => $request->item_name,
            'item_price' => $request->item_price,
            'size' => $request->size,
            'stock' => $request->stock,
            'category_id' => $request->category_id,
            'catalog_image' =>  $request->file('catalog_image')->storePublicly('catalog'),
            'vendor_id' => auth()->guard('rentals')->user()->id,
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect()->route('homepage.vendor');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('vendorcatalogs')->where('catalog_id',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/vendorCatalog');
    }
}
