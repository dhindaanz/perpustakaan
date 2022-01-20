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

//Route::get('/', function () {
//    return view('welcome');
//});

/*Route::get('/', function () {
    return  'Halaman Home';
});

Route::get('/about', function () {
    return  'Halaman About';
});

Route::get('/gallery', function () {
    return  'Halaman Gallery';
});*/

Route::get('/', function () {
    return view('Home');
});

Route::get('/about', function () {
    return view ('About', [
        "nama" => "Dhinda Anniza Cahyaningwidhi",
        "email" => "dhindaannis@gmail.com",
        "gambar" => "dhinda.jpeg"
    ]);
});

Route::get('/gallery', function () {
    return view ('Gallery');
});