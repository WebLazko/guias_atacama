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
    return View('inicio');
});

Route::get('/montana','MountainController@index');
Route::get('/costa','CostaController@index');
Route::get('/valle','ValleController@index');
Route::get('/prestadorServicios','PrestadorServiciosController@index');
Route::get('/prestadorDescripcion','PrestadorDescripcionController@index');

Route::group(['prefix'	=>	'admin'], function(){

	Route::resource('users','UsersController');

});
