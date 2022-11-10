<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/punch', 'App\Http\Controllers\PunchController@index')->name('punch');
Route::get('/punch/{id}', 'App\Http\Controllers\PunchController@user_punch');
Route::middleware('checkIp')->post('/punch/start_work/', 'App\Http\Controllers\PunchController@start');
Route::middleware('checkIp')->post('/punch/stop_work/', 'App\Http\Controllers\PunchController@stop');
Route::post('/punch/ajax_update', 'App\Http\Controllers\PunchController@ajaxUpdate');

Route::get('excel/export/punch/{id}/{year}-{month}','App\Http\Controllers\ExcelController@punchExport');

Route::get('excel/export/punches/{year}-{month}','App\Http\Controllers\ExcelController@punchAllExport');

Route::post('/login', 'App\Http\Controllers\UserController@login')->name('login');

Route::get('/svg', 'App\Http\Controllers\UserController@svg');
