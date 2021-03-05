<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function showUsersId($id)
    {
        $users = User::findOrFail($id);
        return view('home', compact('users'));
    }
    public function createUser()
    {
        return view('createUser');
    }
    public function saveUser(Request $request)
    {
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success', 'Thank you for registering!');
    }
}
