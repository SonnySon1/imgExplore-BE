<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    // redirect google login
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    // callback google login
    public function handleGoogleCallback(Request $request){
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $findUser =  User::where('email', $user->getEmail())->first();

            if ($findUser) {
                if ($findUser->status_active == 0) {
                    request()->session()->invalidate();
                    request()->session()->regenerateToken();
                    return redirect('/signin')->with('error_login', 'This user has been banned');
                }
                Auth::login($findUser);
                return redirect()->intended('/explore');
            }else {
             // Random profile photo
                $picture =[
                    'picture1.jpg',
                    'picture2.png',
                    'picture3.jpg',
                    'picture4.jpg'
                ];
                shuffle($picture);
                $shuffle_result = $picture[0];

                $newUser = User::create([
                    "name" =>  $user->getName(),
                    "email" => $user->getEmail(),
                    "picture" => $shuffle_result,
                    "uuid" => Str::uuid(),
                    "is_google_user" => "1",
                ]);
                Auth::login($newUser);
                return redirect()->intended('/explore');
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
