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
    //return view('welcome');
    return view("calculator");
});
Route::post('/user', 'CalculatorController@store');
Route::get('/retu','CalculatorController@retu');
Route::get("/retu2","CalculatorController@retu2");
Route::get("/next","CalculatorController@next");