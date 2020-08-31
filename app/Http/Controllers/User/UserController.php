<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public $roles;
    public function __construct()
    {
        $this->roles = Role::all();
    }
    public function index()
    {
        $users = User::all();
        return view('backpanel.users.index', compact('users'));
    }

    public function create()
    {
        return view('backpanel.users.create')->with('roles', $this->roles);
    }

    public function store(UserRequest $request)
    {
       $user = User::create($request->all());
       $user->assignRole($request->role_id);
       $user->addMedia($request->avatar)->toMediaCollection('user_avatar');
       return $this->redirectUser($user->name." Added Successfully");
    }

    public function edit(User $user){
        return view('backpanel.users.edit', compact('user'))
            ->with('roles', $this->roles);
    }

    public function update(UserRequest $request, User $user){
        $user->update($request->all());
        $user->syncRoles([$request->role_id]);
        return $this->redirectUser($user->name." Updated Successfully");
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->redirectUser("User Deleted Successfully");
    }

    protected function redirectUser(String $message){
        return redirect()
            ->route('user.index')
            ->with('success', $message);
    }


}
