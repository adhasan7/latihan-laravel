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
Route::get('/about', function () {
    return 9*9;
});

Route::get('/contact', function () {
    return view('contact');
});


Route::view('/contact', 'contact', ['name' => 'Taylor','kontak' => '08999' ]);

Route::redirect('/contact', '/contact-us');

Route::get('/product', function (){
    return "product";
});

Route::get('/product/{id}', function($id) {
    return view('product.detail', ['id' => $id]); 
});



Route::prefix('saya')->group(function () {
    Route::get('admin-profile', function() {
        return "admin profile";
    });
    Route::get('admin-about', function() {
        return "admin about";
    });
    Route::get('admin-contact', function() {
        return "admin contact";
    });
});


