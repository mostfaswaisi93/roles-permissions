<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Role::create(['name' => 'Admin']);
        // Permission::create(['name' => 'write post']);
        // $permission = Permission::create(['name' => 'edit post']);

        // $role = Role::findById(1);
        // $permission = Permission::findById(1);

        // $role->givePermissionTo($permission);
        // $permission->removeRole($role);
        // $role->revokePermissionTo($permission);

        // $permission->assignRole($role);


        // Role::create(['name' => 'Admin']);
        // $permission = Permission::create(['name' => 'write post']);
        // $role = Role::findById(1);
        // $role->givePermissionTo($permission);
        // auth()->user()->givePermissionTo('edit post');
        // auth()->user()->assignRole('Admin');

        // return auth()->user()->getAllPermissions();

        return User::role('admin')->get();

        return view('home');
    }
}
