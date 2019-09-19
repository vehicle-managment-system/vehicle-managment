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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/home', 'AssignersController');

Route::get('makerequest', 'RequesttsController@index');

Route::get('viewrequest', 'RequesttsController@show');

Route::get('detailrequest', 'RequesttsController@detail');

Route::get('/allrequest', function () {
    return view('Requests.resource');
});

Route::get('/detailresource', function () {
    return view('Requests.resourcedetail');
});
