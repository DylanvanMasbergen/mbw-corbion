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

Auth::routes();

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/scanfile', 'HomeController@showFile')->name('scanfile');
    Route::resource('scandepartment', 'ScanDepartmentController');
    Route::resource('scanpoint', 'ScanpointController');
    Route::resource('employees', 'EmployeeController');
    Route::resource('user', 'UserController');
});
/*
Route::get('/', function () {
    return redirect('/home');
});*/

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::post('/scanround' ,'ScanRoundController@create');
Route::get('/scanround/test' ,'ScanRoundController@index');