<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    //sign in Page
    public function index(){
            return view('pages.auth.signin');
    }

    // sign in store
    public function store(Request $request){
        // validate data
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required']
            ]);

        // signin data check
        
        $user_data = User::Firstwhere('username', $request->username);
        
        // if ($user_data->status_active == 0) {
        //     return back()->with('error', 'the account is banned');
        // }
        
        if (Auth::attempt($credentials)) {    
            $request->session()->regenerate();
            return redirect()->intended('/explore');
        }
        else{
            return back()->with('error', 'Incorrect Username / Password');
        }
    }


    // sign out
    public function signout(){
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
