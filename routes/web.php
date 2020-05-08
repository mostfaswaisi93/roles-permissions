<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');

    // auth()->user()->assignRole('admin', 'user');

    auth()->user()->syncRoles(['user']);

    // auth()->user()->assignRole('admin');
    // auth()->user()->removeRole('admin');

    // if(auth()->user()->hasRole('admin')){
    //     return "OK";
    // }

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
