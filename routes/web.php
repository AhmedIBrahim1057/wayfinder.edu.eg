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

// Route::get('/', function () {
//     return view('/home');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/persons', 'HomeController@persons')->name('persons');
Route::get('/floors', 'HomeController@floors')->name('floors');
Route::get('/search', 'HomeController@search')->name('search');
Route::post('/getAutocompleteData', 'HomeController@getAutocompleteData')->name('getAutocompleteData');

Route::get('/place/{id}', 'HomeController@placeDetails')->name('place-details');
Route::get('/floor/{id}', 'HomeController@floorDetails')->name('place-details');
