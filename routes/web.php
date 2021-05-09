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
    return view('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/persons', 'HomeController@persons')->name('persons');
Route::get('/floors', 'HomeController@floors')->name('floors');
Route::get('/search', 'HomeController@search')->name('search');

Route::get('/place-details', 'HomeController@placeDetails')->name('place-details');
