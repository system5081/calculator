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

Route::get('/','CalculatorController@view');
    //return view("calculator");
//});
Route::post('/user', 'CalculatorController@store_users');
Route::post('/user','CalculatorController@store_equations');
Route::post('/retur','CalculatorController@retur');
Route::post('/retur','CalculatorController@store_equations');
Route::post('/nex','CalculatorController@nex');
Route::post('/nex','CalculatorController@store_equations');