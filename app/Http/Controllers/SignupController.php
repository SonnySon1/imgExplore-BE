<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    // sinup page
    public function index(){
        return view('pages.signup');
    }

    // store
    public function store(Request $request) {
        // validasi data
            $request->validate([
                'username'=>"required | unique:users,username",
                'password'=>"required"
            ]);
        
        // Random profile photo
            $picture =[
                'picture1.jpg',
                'picture2.png',
                'picture3.jpg',
                'picture4.jpg'
            ];
            shuffle($picture);
            $shuffle_result = $picture[0];
            
        // data_store
            $data = [
                'username'  =>  $request->username,
                'password'  =>  bcrypt($request->password),
                'picture'   => $shuffle_result
            ];

        // store data to users table 
            $stored_user = User::create($data);

        if ($stored_user == true) {
            return redirect('/explore');
        }
        else{
            return back();
        }
    }

}
