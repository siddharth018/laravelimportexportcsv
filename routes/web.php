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
    return view('welcome');
});

Route::get('export', 'MyController@export')->name('export');

Route::get('importExportView', 'MyController@importExportView');

Route::post('import', 'MyController@import')->name('import');

Route::get('userList', 'MyController@userList')->name('userList');
