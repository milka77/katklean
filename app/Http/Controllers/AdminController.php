<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if (!Auth::user()->hasRole('admin')) {
            return redirect('/');
        }

        return view('components.admin.index');
    }

    // ******************
    // Admin Functions //
    // ******************
    // Assign role to user
    public function attach(User $user)
    {
        $user->roles()->attach(request('role'));

        flash()->success('Role attached successfully!');

        return redirect()->back();
    }

    // Detach role from user
    public function detach(User $user)
    {
        $user->roles()->detach(request('role'));

        flash()->success('Role detached successfully!');

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
