<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class OwnerBarangController extends Controller
{

    public function index()
    {

        $barang = Barang::all();

        return view('owner-barang', compact('barang'));

    }

    public function store(Request $request)
    {

        Barang::create([

            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'supplier' => $request->supplier,
            'customer' => $request->customer

        ]);

        return redirect('/owner/barang');

    }

    public function delete($id)
    {

        Barang::find($id)->delete();

        return redirect('/owner/barang');

    }

    public function edit($id)
    {

        $barang = Barang::find($id);

        return view('edit-barang', compact('barang'));

    }

    public function update(Request $request, $id)
    {

        $barang = Barang::find($id);

        $barang->update([

            'nama_barang' => $request->nama_barang,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'supplier' => $request->supplier,
            'customer' => $request->customer

        ]);

        return redirect('/owner/barang');

    }

}