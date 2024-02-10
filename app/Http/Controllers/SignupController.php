<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    // sinup page
    public function index(){
        return view('pages.auth.signup');
    }

    // store
    public function store(Request $request) {
        // validasi data
           $credentials = $request->validate([
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
                'picture'   => $shuffle_result,
                'uuid'   => Str::uuid(),
            ];

        // store data to users table 
            $stored_user = User::create($data);

        if ($stored_user == true) {

            // login function
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();        


                return redirect()->intended('/explore');
            }
        }
        else{
            return back();
        }
    }

}
