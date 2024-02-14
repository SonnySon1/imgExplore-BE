<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    //page user 
    public function index(){
        $data_users = User::all();
        return view('pages.users.users', compact('data_users'));
    }


    //page user 
    public function edit(User $user){
        return view('pages.users.update-users', compact('user'));
    }

    // store update user
    public function update(User $user, Request $request){
        $request->validate([
            'status_active' => 'required',
            'role'          => 'required'
        ]);

        $data_user_update = [
            'status_active' => $request->status_active,
            'role'          => $request->role
        ];

        $user->update($data_user_update);
        return redirect('/admin/users')->with('success', 'One user has successfully updated');
    }
}
