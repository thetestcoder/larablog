<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permission\PermissionRequest;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backpanel.permission.index')->with('permissions', Permission::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backpanel.permission.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PermissionRequest $request)
    {
        $permission = new Permission();
        $permission->name = $request->name;
        $permission->save();
        return redirect()
            ->route('permission.index')
            ->with('success', "Permission Added Successfully");
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
     * @param Permission $permission
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Permission $permission)
    {
        return view('backpanel.permission.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Permission $permission
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        $permission->name = $request->name;
        $permission->save();
        return redirect()
            ->route('permission.index')
            ->with('success', "Permission Updated Successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Permission $permission
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()
            ->route('permission.index')
            ->with('success', "Permission Deleted Successfully");
    }
}
