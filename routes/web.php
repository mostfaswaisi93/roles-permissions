<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    // 1 - Role
    // return view('welcome');

    // auth()->user()->assignRole('admin', 'user');

    // auth()->user()->syncRoles(['user']);

    // auth()->user()->assignRole('admin');
    // auth()->user()->removeRole('admin');

    // if(auth()->user()->hasRole('admin')){
    //     return "OK";
    // }


    // 2- Permission
    $user = auth()->user();

    // $user->givePermissionTo('add post');
    // $user->revokePermissionTo('add post');
    // $user->syncPermissions(['add post', 'delete post']);
    dd($user->hasAnyPermission(['add post', 'edit post']));
    // dd($user->hasPermissionTo('add post'));

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
