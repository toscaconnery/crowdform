<?php

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
    return view('beranda');
});

Route::get('/idebisnis', function(){
  return view('dashboard/idebisnis');
});

Route::get('/daftarmentor', function(){
  return view('dashboard/daftarmentor');
});

Route::get('/daftarbimbingan', function(){
  return view('dashboard/daftarbimbingan');
});

Route::get('/datakelompok', function(){
  return view('dashboard/datakelompok');
});
