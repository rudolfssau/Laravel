<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUsers()
    {
        $users = User::get();
        return view('home', compact('users'));
     }
}
