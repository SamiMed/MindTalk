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

Auth::routes();

Route::get('/', function(){

    return view('index');
});

Route::get('home', function(){

    return view('home');
});

Route::get('/sendemail', 'SendEmailController@index');
Route::post('/sendemail/send','SendEmailController@send');

Route::get('/ResteEmail', 'ResteEmailController@index');
Route::post('/ResteEmail/send','ResteEmailController@send');