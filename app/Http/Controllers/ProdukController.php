<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    public function index(){
        $produk = Produk::all();
        return view('produk.index',compact('produk'));
    }

    public function create(){
        return view('produk.create');
    } 

    public function store(Request $request){
        $validateDate = $request->validate([
            'nama_produk'           => 'required|min:3|max:45',
            'jenis_produk'          => 'required',
            'keluar_produk'         => 'required',
            'masuk_produk'          => 'required',
            'jenis_produk'          => 'required',
            'nama_pengelola_produk' => 'required|min:2|max:40',
            'nik_pengelola'         => 'required',
            'alamat_pengelola'      => 'required'
        ]);
        Produk::create($validateDate);
        $request->session()->flash('pesan', "Data {$validateDate['nama_produk']} Saved ");
        return redirect()->route('produk.index');
    }

    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    public function edit(Produk $produk)
    {
        return view('produk.edit',['produk'=>$produk]);
    }

    public function update(Request $request, Produk $produk)
    {
        $validateDate = $request->validate([
            'nama_produk'           => 'required|min:3|max:45',
            'jenis_produk'          => 'required',
            'keluar_produk'         => 'required',
            'masuk_produk'          => 'required',
            'jenis_produk'          => 'required',
            'nama_pengelola_produk' => 'required|min:2|max:40',
            'nik_pengelola'         => 'required',
            'alamat_pengelola'      => 'required'
        ]);
        $produk->update($validateDate);
        return redirect()->route('produk.show',['produk'=>$produk->id_produk])->with('pesan',"update data {$validateDate['nama_produk']} Berhasil ");

    }


    public function destroy(Produk $produk){
        $produk->delete();
        return redirect()->route('produk.index')->with('pesan',"Hapus data $produk->nama_produk Berhasil");
    }
}
