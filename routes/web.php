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

Route::get('/test1/{id?}', function ($id = 0) {
    return $id;
})->where('id', '[0-9]+');

Route::get('admin/profile', function () {
    //
})->middleware(CheckAge::class);
