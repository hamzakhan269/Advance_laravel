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
//     return view('welcome');
// });
Route::get('/export','Products@excelData');
Route::get('event','UsersAuth@index');
Route::get('products','ProductController@index');
Route::get('/','RestoController@index');
Route::get('list','RestoController@list');
Route::post('add','RestoController@add');
Route::view('add','add');
Route::get('/delete/{id}', 'RestoController@delete');






