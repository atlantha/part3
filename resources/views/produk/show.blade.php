@extends('tampil_produk')
@section('title','Detail-Produk')
@section('produk','active')

@section('content')    
<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">
            <div class="pt-3 d-flex justify-content-left align-items-center ">
                <h1 class="h1 mr auto text-center">Produk {{ $produk->nama_produk }}</h1>
            </div>
            <hr>
            {{-- FLASH DATA --}}
            @if (session()->has('pesan'))
                <div class="alert alert-success" role="alert">
                    {{ session()->get('pesan') }}
                </div>
            @endif
            {{-- END FLASH DATA  --}}

            <ul>
                <li>Nama                   : {{ $produk->nama_produk }}</li>
                <li>Jenis Produk           : {{ $produk->jenis_produk }}</li>
                <li>Keluar Produk          : {{ $produk->keluar_produk }}</li>
                <li>Masuk Produk           : {{ $produk->masuk_produk }}</li>
                <li>Nama Pengelola Produk  : {{ $produk->nama_pengelola_produk }}</li>
                <li>Nik Pengelola          : {{ $produk->nik_pengelola }}</li>
                <li>Alamat Pengelola       : {{ $produk->alamat_pengelola }}</li>
            </ul>
            <div class="pt-3 d-flex justify-content-left align-items-center ">
                <a href="{{ route('produk.edit', $produk->id_produk) }}" class="btn btn-warning">
                    Edit
                </a>
                <form action="{{ route('produk.destroy', ['produk' =>$produk->id_produk]) }}" method='POST'>
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                <a href="{{ route('produk.index', $produk->id_produk) }}" class="btn btn-success">
                    Back
                </a>
            </div>


        </div>
    </div>
</div>
@endsection