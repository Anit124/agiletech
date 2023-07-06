<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use Stichoza\GoogleTranslate\GoogleTranslate;

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

// Route::get('index', function () {
//    $lang= new GoogleTranslate('en');
//    return $lang->SetSource('en')->setTarget('de')->translate("Lfdgbhjk");
// });

Route::get('/', function () {
    return view('index');
});
Route::get('/index', 'App\Http\Controllers\IndexController@index');