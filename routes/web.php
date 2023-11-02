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
    return view('layouts.master');
});

Route::get('home', function () {
    return view('home');
});

Route::get('data_peminjam', function () {
    return view('peminjam/data_peminjam');
});

Route::get('lihat_data_peminjam', 'App\Http\Controllers\PeminjamController@lihat_data_peminjam');

Route::group(array('prefix' => 'admin'), function () {
    //url ke halaman home
    Route::get('/', function () {
        return 'Halaman Home Admin';
    });
    //Route ke halaman input data buku
    Route::get('post', function () {
        return "Halaman Input data Buku";
    });
    //Route ke halaan input data buku
    Route::get('post/simpan', function () {
        return "Data berhasil disimpan";
    });
});

Route::get('data_peminjam/data_peminjam_pdf2', 'App\Http\Controllers\DataPeminjamController@data_peminjam_pdf2')->name('data_peminjam.data_peminjam_pdf2');


Route::get('data_peminjam', 'App\Http\Controllers\DataPeminjamController@index');

Route::get('data_peminjam/create', 'App\Http\Controllers\DataPeminjamController@create')->name('data_peminjam.create');
Route::post('data_peminjam/store', 'App\Http\Controllers\DataPeminjamController@store')->name('data_peminjam.store');
Route::get('data_peminjam/edit/{id}', 'App\Http\Controllers\DataPeminjamController@edit')->name('data_peminjam.edit');
Route::post('data_peminjam/delete/{id}', 'App\Http\Controllers\DataPeminjamController@destroy')->name('data_peminjam.destroy');
Route::get('data_peminjam/search', 'App\Http\Controllers\PeminjamController@search')->name('data_peminjam.search');
Route::post('data_peminjam/update/{id}', 'App\Http\Controllers\DataPeminjamController@update')->name('data_peminjam.update');

Route::get('data_peminjam/data_peminjam_pdf', 'App\Http\Controllers\DataPeminjamController@data_peminjam_pdf')->name('data_peminjam.data_peminjam_pdf');


