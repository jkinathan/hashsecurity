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


Route::group(['prefix' => 'employee'], function() {
    //permissions need to be attached to the routes
    Route::get('/create', 'EmployeeController@create')->name('employee.create');
    Route::post('/store', 'EmployeeController@store')->name('employee.store');
    Route::get('/list', 'EmployeeController@list')->name('employee.list');
    Route::get('/show/{id}', 'EmployeeController@show')->name('employee.show');
    // Route::post('/employee/create', 'EmployeeController@store');
     Route::get('/edit/{id}', 'EmployeeController@edit')->name('employee.edit');
     Route::put('/update/{id}', 'EmployeeController@update')->name('employee.update');
    // Route::delete('/destroy/{id}', 'CustomerController@destroy')->name('customer.destroy');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
