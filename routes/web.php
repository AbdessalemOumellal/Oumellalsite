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
    return view('index');
});

// Route::get('/createmsg', 'contactmeController@create');
// Route::get('createmsg','contactmeController@index');
Route::post('storemsg','contactmeController@store');



Route::post('sendmail','sendmailController@send');


Route::get('/uxuiwp', function () {
    return view('uxui');
});

Route::get('/biwp', function () {
    return view('bi');
});

Route::get('firebase','FirebaseController@index');
