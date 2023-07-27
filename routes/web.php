<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\GalleryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/index', 'App\Http\Controllers\IndexController@index');
Route::get('/gallery', 'App\Http\Controllers\GalleryController@gallery');
Route::get('/our_president', 'App\Http\Controllers\GalleryController@our_president');
Route::get('/obc_bjp_morcha', 'App\Http\Controllers\GalleryController@obc_bjp_morcha');
Route::get('/national_team', 'App\Http\Controllers\GalleryController@national_team');
Route::get('/national_socialmediamember', 'App\Http\Controllers\GalleryController@national_socialmediamember');
Route::get('/obc_ministers', 'App\Http\Controllers\GalleryController@obc_ministers');
Route::get('/History_development', 'App\Http\Controllers\GalleryController@History_development');
