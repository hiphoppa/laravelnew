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
    return view('content');
});
// Route::get('/content', function () {
//     return view('content');
// });
Route::get('/list', function () {
    return view('list');
});
Route::get('/emptylist', function () {
    return view('emptylist');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/loginstep1', function () {
    return view('loginstep1');
});
Route::get('/loginstep2', function () {
    return view('loginstep2');
});
