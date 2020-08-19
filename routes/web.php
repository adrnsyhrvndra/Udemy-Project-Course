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


// Script untuk mengecek koneksi ke database

// try { 

//     DB::connection()->getPdo(); echo 'Yey, it worked'; 

// } 

// catch (\Exception $e) { 

//     die("Could not connect to the database.  Please check your configuration. error:" . $e ); 

// }

Route::get('/', 'PageController@index');

Route::get('/page/{id}', 'PageController@page')->name('page');

Route::get('/contactus', 'ContactController@index')->name('contactus');

Route::post('/contactus/sendmessage', 'ContactController@sendmessage')->name('sendmessage');
