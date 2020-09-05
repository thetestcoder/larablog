<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Role\AssignPermssion;
use App\Http\Requests\Role\RoleRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backpanel.roles.index')->with('roles', Role::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backpanel.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->save();

        return redirect()
            ->route('role.index')
            ->with('success', "Role Added Successfully");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Role $role
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        return view('backpanel.roles.edit')
            ->with('role', $role);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Role $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(RoleRequest $request, Role $role)
    {
        $role->name = $request->name;
        $role->save();
        return redirect()
            ->route('role.index')
            ->with('success', "Role Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Role $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()
            ->route('role.index')
            ->with('success', "Role Deleted Successfully");
    }

    /**
     * @param Role $role
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function assignPermissionView(Role $role)
    {
        $permissions= Permission::all();
        return view(
            'backpanel.roles.assign-permission',
            compact(['role', 'permissions'])
        );
    }

    /**
     * @param AssignPermssion $request
     * @param Role $role
     * @return \Illuminate\Http\RedirectResponse
     */
    public function assignPermission(AssignPermssion $request, Role $role)
    {
        $role->syncPermissions($request->permission);
        return back()->with('success', "Permission Added Successfully");
    }
}
