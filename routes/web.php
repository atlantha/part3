<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('tampil_produk');
});

Route::get('/produk','ProdukController@index')->name('produk.index');
Route::get('/produk/create','ProdukController@create')->name('produk.create');
Route::post('/produk','ProdukController@store')->name('produk.store');
Route::get('/produk/{produk}','ProdukController@show')->name('produk.show');
Route::get('/produk/{produk}/edit','ProdukController@edit')->name('produk.edit');
Route::patch('/produk/{produk}','ProdukController@update')->name('produk.update');
Route::delete('/produk/{produk}','ProdukController@destroy')->name('produk.destroy');


