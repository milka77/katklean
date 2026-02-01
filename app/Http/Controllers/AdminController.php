<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('components.admin.index');
    }

    // ******************
    // Admin Functions //
    // ******************
    // Assign role to user
    public function attach(User $user)
    {
        $user->roles()->attach(request('role'));

        toastr('Role attached successfully!', 'success');

        return redirect()->back();
    }

    // Detach role from user
    public function detach(User $user)
    {
        $user->roles()->detach(request('role'));

        toastr('Role detached successfully!', 'success');

        return redirect()->back();
    }

    // Show user details
    public function userIndex(User $user)
    {
        $users = User::all();

        return view('components.admin.users.index', compact('users'));
    }

    public function showUser(User $user)
    {
        $user = User::findOrFail($user->id);
        $roles = Role::all();

        return view('components.admin.users.show', compact('user', 'roles'));
    }


}
