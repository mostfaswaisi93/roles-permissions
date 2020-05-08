<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

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
    // $user = auth()->user();

    // $user->givePermissionTo('add post');
    // $user->revokePermissionTo('add post');
    // $user->syncPermissions(['add post', 'delete post']);
    // dd($user->hasAnyPermission(['add post', 'edit post']));
    // dd($user->hasPermissionTo('add post'));

    // 3- Role and Permission
    // $user = auth()->user();
    // $role = Role::find(2);
    // $role->givePermissionTo('add post', 'edit post', 'delete post', 'view post');
    // $role->syncPermissions('add post', 'edit post', 'delete post', 'view post');
    // dd($user->can('add post'));

    // dd($user);

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
