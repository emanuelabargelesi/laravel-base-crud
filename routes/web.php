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

Route::get('/employees', 'EmployeeController@index')->name('employee.index');
Route::get('/createemployees', 'EmployeeController@create')->name('employee.create');
Route::post('/storeemployees', 'EmployeeController@store')->name('employee.store');
Route::get('/{id}/edit', 'EmployeeController@edit')->name('employee.edit');
Route::post('/{id}', 'EmployeeController@update')->name('employee.update');
Route::get('/{id}/delete', 'EmployeeController@destroy')->name('employee.destroy');