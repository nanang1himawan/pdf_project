<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


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
    Route::get('/pegawai', 'App\Http\Controllers\PegawaiController@index');
    Route::get('/pegawai/cetak_pdf', 'App\Http\Controllers\PegawaiController@cetak_pdf');
    Route::get('/pegawai/{detail}', 'App\Http\Controllers\PegawaiController@detail');
    Route::get('/pegawai/cetak_pdf_detail/{pegawai_pdf_detail}', 'App\Http\Controllers\PegawaiController@cetak_pdf_detail');
    Route::get('/pegawai/export_excel', 'App\Http\Controllers\PegawaiController@export_excel');
    
    Route::get('/generate-barcode', [ProductController::class, 'index'])->name('generate.barcode');
   
   
   
   
    // Route::get('pegawai/{id}', function($id){
    //     return view('detail');

    // });