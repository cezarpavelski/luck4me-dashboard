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
    return view('login/main');
});
Route::get('/dashboard', function () {
    return view('dashboard/main');
});
Route::get('/profile', function () {
    return view('profile/main');
});
Route::get('/offer', function () {
    return view('offers/main');
});
Route::get('/voucher/validate', function () {
    return view('voucher/main');
});
