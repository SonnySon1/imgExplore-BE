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
            $credentials = $request->validate([
                'username' => ['required'],
                'password' => ['required']
            ]);

        $data_user = User::Firstwhere('username', $request->username);
        
        if (Auth::attempt($credentials)) {    
            if ($data_user->status_active == 0) {
                request()->session()->invalidate();
                request()->session()->regenerateToken();
                return back()->with('error_login', 'This user has been banned');
            }else{
                $request->session()->regenerate();
                return redirect()->intended('/explore');
            }
        }
        else{
            return back()->with('error_login', 'Incorrect Username / Password');
        }
    }


    // sign out
    public function signout(){
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
