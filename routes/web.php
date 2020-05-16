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

Route::group(['middleware' => 'auth'], function () {

    Route::resource('/admin/departements', 'DepartementsController');
    Route::get('/admin/departements/{id}/destroy', 'DepartementsController@destroy')->name('departements.destroy');

    Route::resource('/admin/employees', 'EmployeesController');
    Route::get('/admin/employees/{id}/destroy', 'EmployeesController@destroy')->name('employees.destroy');
});


