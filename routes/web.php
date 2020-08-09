<?php

use Illuminate\Support\Facades\Auth;
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
Route::get('/nameStd',function(){
    return view('STD.NameStd');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('contact','ContactController')->middleware('auth');

Route::get('/nameStd', 'ImportExcelController@index')->middleware('auth');
Route::post('/nameStd', 'ImportExcelController@import')->middleware('auth');
