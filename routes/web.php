<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\homecontroller;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrdertController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\GreetingController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ProfileController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () { 
    return 'hello tessss';
});
Route::get('/contoh',function(){
    $user = [
        'nama' => 'herdian',
        'alamat' => 'jl. cempaka no. 12',
        'pekerjaan' => 'programmer'
    ];
    return response()->json($user);
});
// Di routes/web.php
Route::get('/latihan1', function () {
    return view('latihan1', [
        'nama' => 'mister',
        'nilai' => 85
    ]);
    
});
Route::get('/latihan1', function () {
    return view('latihan1', [
        'nama' => 'mister',
        'nilai' => 55
    ]);
    
});


Route::resource('product', ProductController::class);
Route::resource('ordert', OrdertController::class);
Route::resource('posts', PostController::class);
Route::get('/greeting', [GreetingController::class, 'showGreeting']);
route::get ('/siswa', [SiswaController::class, 'index']);
route::get('/profile', [ProfileController::class, 'index']);





