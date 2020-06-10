@extends('tampil_produk')
@section('title','Form-Produk')
@section('produk','active')

@section('content')    
<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Data Produk</h1>
            <hr>
        <form action="{{ route('produk.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id='nama_produk' name='nama_produk' value="{{ old('nama_produk') }}">
                @error('nama_produk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="jenis_produk">Jenis Produk</label>
                <select name="jenis_produk" id="jenis_produk" class="form-control">
                    <option value="Honda" {{ old('jenis_produk') == 'Honda' ? 'selected' : '' }}>
                        Honda
                    </option>
                    <option value="Toyota" {{ old('jenis_produk') == 'Toyota' ? 'selected' : '' }}>
                        Toyota
                    </option>
                    <option value="Daihatsu" {{ old('jenis_produk') == 'Daihatsu' ? 'selected' : ' '}}>
                        Daihatsu
                    </option>
                </select>
            </div>

            <div class="form-group">
                <label for="keluar_produk">Keluar Produk</label>
                <input type="text" class="form-control @error('keluar_produk') is-invalid @enderror" id='keluar_produk' name='keluar_produk' value="{{ old('keluar_produk') }}">
                @error('keluar_produk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="masuk_produk">Masuk Produk</label>
                <input type="text" class="form-control @error('masuk_produk') is-invalid @enderror" id='masuk_produk' name='masuk_produk' value="{{ old('masuk_produk') }}">
                @error('masuk_produk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_pengelola_produk">Nama Pengelola Produk</label>
                <input type="text" class="form-control @error('nama_pengelola_produk') is-invalid @enderror" id='nama_pengelola_produk' name='nama_pengelola_produk' value="{{ old('nama_pengelola_produk') }}">
                @error('nama_pengelola_produk')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nik_pengelola">Nik Pengelola</label>
                <input type="text" class="form-control @error('nik_pengelola') is-invalid @enderror" id='nik_pengelola' name='nik_pengelola' value="{{ old('nik_pengelola') }}">
                @error('nik_pengelola')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat_pengelola">Alamat Pengelola</label>
                <input type="text" class="form-control @error('alamat_pengelola') is-invalid @enderror" id='alamat_pengelola' name='alamat_pengelola' value="{{ old('alamat_pengelola') }}">
                @error('alamat_pengelola')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mb-2">Save</button>
   


        </form>
      </div>
    </div>
</div>
@endsection
