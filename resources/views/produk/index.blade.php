@extends('tampil_produk')
@section('title','Data-Produk')
@section('produk','active')

@section('content')    
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="py-4">
                <h1 class="text-center">Data Produk</h1>
                <hr>
            <a href="{{ route('produk.create') }}" class="btn btn-primary">Tambah Data</a>
            </div>

            {{--  Nampilin Flash Data --}}
            @if (session()->has('pesan'))
            <div class="alert alert-success">
                {{ session()->get('pesan') }}
            </div>
            @endif
            {{--  End Flash Data --}}

            <table class="table table-striped table-dark">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jenis Produk</th>
                    <th scope="col">Keluar Produk</th>
                    <th scope="col">Masuk Produk</th>
                    <th scope="col">Nama Pengelola Produk</th>
                    <th scope="col">Nik Pengelola</th>
                    <th scope="col">Alamat Pengelola</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($produk as $tampil)
                        <tr>
                        <td><a href=" {{ url('/produk/'.$tampil->id_produk) }} ">{{ $loop->iteration }}</a></td>
                        <td>{{ $tampil->nama_produk}}</td>
                        <td>{{ $tampil->jenis_produk }}</td>
                        <td>{{ $tampil->keluar_produk }}</td>
                        <td>{{ $tampil->masuk_produk }}</td>
                        <td>{{ $tampil->nama_pengelola_produk }}</td>
                        <td>{{ $tampil->nik_pengelola }}</td>
                        <td>{{ $tampil->alamat_pengelola }}</td>
                        </tr>
                    @empty
                        <td colspan="8" class="text-center">Data Kosong</td>
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
</div>
@endsection