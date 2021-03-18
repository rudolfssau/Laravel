<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\CreateUsers;
use App\Http\Requests\UpdateUser;

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
    public function saveUser(CreateUsers $request)
    {
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success', 'Thank you for registering!');
    }
    public function allUsers()
    {
        $users = User::paginate(5);
        return view('allusers', compact('users'));
    }
    public function viewUser($id)
    {
        $user = User::findOrFail($id);
        return view('viewUser', compact('user'));
    }
    public function updateUser(UpdateUser $request, $id)
    {
        $user = User::findOrFail($id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->back()->with('success', 'Changes saved!');
    }
    public function deleteUser(Request $request, $id)
    {
        $request->validate([
            'userid' => 'required',
        ]);
        if($id == $request->userid)
        {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect('/users/');
        }
        return redirect()->back()->with('failed', 'Please enter a valid ID, user not deleted!');
    }
}
