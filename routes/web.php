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

/* Awalan/Index Website */
Route::get('/', function () {
    return view('awal');
});

/* Melakukan aktifitas biasa yang berjalan dengan API */
Route::get('/indonesia','InfoCorona@indonesia');
Route::get('/provinsi','InfoCorona@provinsi');
Route::get('/dunia','InfoCorona@dunia');
Route::get('/detilprovinsi','InfoCorona@detilprovinsi');

/* Read + Cari di Info Kesehatan */
Route::get('/infokesehatan','InfoCorona@infokesehatan');
Route::get('/infokesehatan/cari','InfoCorona@carijudul');

/* CUD Info Kesehatan */
Route::get('/infokesehatan/tambah','InfoKesehatan@info_tambah');
Route::get('/infoedit','InfoKesehatan@infoedit');
Route::post('/infokesehatan/store','InfoKesehatan@info_store');
Route::get('/infokesehatan/edit/{id}','InfoKesehatan@info_edit');
Route::put('/infokesehatan/update/{id}','InfoKesehatan@info_update');
Route::get('/infokesehatan/hapus/{id}','InfoKesehatan@info_hapus');

/* CUD Tag Untuk Label Info Kesehatan */
Route::get('/tag/tambah','Tags@tag_tambah');
Route::get('/tagedit','Tags@tagedit');
Route::post('/tag/store','Tags@tag_store');
Route::get('/tag/edit/{id}','Tags@tag_edit');
Route::put('/tag/update/{id}','Tags@tag_update');
Route::get('/tag/hapus/{id}','Tags@tag_hapus');

/* CUD Info-Tag */
Route::get('/infotag/tambah','InfoTags@infotag_tambah');
Route::get('/infotagedit','InfoTags@infotagedit');
Route::post('/infotag/store','InfoTags@infotag_store');
Route::get('/infotag/edit/{id}','InfoTags@infotag_edit');
Route::put('/infotag/update/{id}','InfoTags@infotag_update');
Route::get('/infotag/hapus/{id}','InfoTags@infotag_hapus');


/* Melakukan pelaksanaan authentikasi pengguna/login */
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

