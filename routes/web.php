<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/admin', 'AdminController@index')->middleware('role:admin');
// Route::get('/admin', 'AdminController@index');

Route::middleware('role:admin')->group(function () {
    Route::get('/admin', 'AdminController@index');
});
