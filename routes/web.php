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
Route::resource('social','SocialController')->except('store','show','create','edit','update','destroy');
Route::resource('finance','FinanceController')->except('store','show','create','edit','update','destroy');
Route::resource('technical','TechnicalController')->except('store','show','create','edit','update','destroy');
Route::get('/municipal/{municipal}','LocationController@getMunicipal');
Route::get('/municipal','LocationController@getAllMunicipal');
Route::post('/searches','SearchController@filter')->name('searches');
Route::get('/fetch/projects','SearchController@filter');
Route::get('/fetch/cycles', 'FilterController@getCycles');
Route::get('/fetch/municipals', 'FilterController@getMunicipals');