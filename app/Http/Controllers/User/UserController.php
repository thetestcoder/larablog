<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('backpanel.users.index', compact('users'));
    }

    public function create()
    {
        return view('backpanel.users.create');
    }

    public function store(Request $request)
    {
       $user = User::create($request->all());
        return $this->redirectUser($user->name." Added Successfully");
    }

    public function edit(User $user){
        return view('backpanel.users.edit', compact('user'));
    }

    public function update(Request $request, User $user){
        $user->update($request->all());
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
