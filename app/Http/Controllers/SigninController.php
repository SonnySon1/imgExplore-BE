<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SigninController extends Controller
{
    //sign in Page
    public function index(){
            return view('pages.signin');
    }

    // sign in store
    public function store(Request $request){
        // validate data
            $credentials = $request->validate([
                'username' => 'required',
                'password' => 'required'
            ]);

        // signin data check
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return view('pages.explore');
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
