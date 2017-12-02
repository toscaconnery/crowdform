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

<<<<<<< HEAD
=======
// Login
//Route::post('/login', 'UserController@login')->name('user.login');

// Register
Route::post('/register', 'UserController@registerUser')->name('user.register');

Route::post('/biodata', 'BiodataController@setBiodata')->name('biodata.set');
>>>>>>> 5fe1492bd04ae58a9ca3fa787f6955c54c5788f1

Route::get('/daftarbimbingan', function(){
  return view('dashboard/daftarbimbingan');
});

<<<<<<< HEAD
Route::get('/datakelompok', function(){
  return view('dashboard/datakelompok');
});
=======

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
>>>>>>> 5fe1492bd04ae58a9ca3fa787f6955c54c5788f1
