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


Route::get('/introphp', function () {
    return view('welcome');
});

Route::get('/intro',function(){
   return view('frontend.home');
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/content','HomeController@show');

//Route::get('/home','Homecontroller@index');
Route::get('/reg-form','TicketController@show');

//Route::get('/test','TicketController@show');

//Route::get('/payment','RegController@index');

Route::post('/review','RegController@show');

Route::post('/submit','RegController@store');

Route::get('/cfp', function () {
    return view('frontend.callforpaper');
});
Route::get('/ses', function () {
    return view('frontend.sessions');
});

Route::get('/symp', function () {
    return view('frontend.symposiums');
});

Route::get('/venue', function () {
    return view('frontend.venue');
});

Route::get('/orgcomm', function () {
    return view('frontend.orgcommitee');
});

Route::get('/techcomm', function () {
    return view('frontend.techcommitee');
});

Route::get('/papersub', function () {
    return view('frontend.papersubmission');
});

Route::get('/finalpaper', function () {
    return view('frontend.finalpaperguide');
});

Route::get('/regdetail', function () {
    return view('frontend.regdetail');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
