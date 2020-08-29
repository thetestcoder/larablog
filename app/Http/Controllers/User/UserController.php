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
}
