<?php

namespace App\Http\Controllers;

use App\Models\Role;    
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use function Flasher\Toastr\Prime\toastr;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();

        return view('components.admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('components.admin.roles.create');
    }

    public function store()
    {
        // Validation
        $data = request()->validate([
            'name' => ['required', 'string', 'max:50'],
        ]);

        // Create Role
        $role = new Role;
        $role->name = Str::lower($data['name']);
        $role->slug = Str::slug($data['name'], '-');
        $role->save();

        toastr('Role created successfully!', 'success');

        return redirect()->route('admin.index');
    }

    public function edit(Role $role)
    {
        return view('components.admin.roles.update', compact('role'));
    }

    public function update(Role $role)
    {
        // Validation
        $data = request()->validate([
            'name' => ['required', 'string', 'max:50'],
        ]);

        // Update Role
        $role->name = Str::lower($data['name']);
        $role->slug = Str::slug($data['name'], '-');
        $role->save();

        toastr('Role updated successfully!', 'success');

        return redirect()->route('admin.index');
    }

    public function destroy(Role $role)
    {
        $role->delete();

        toastr('Role deleted successfully!', 'success');

        return redirect()->route('admin.index');
    }
}
