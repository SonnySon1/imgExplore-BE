<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //profile page
        public function index(Request $request){
            if ($request->show) {
                $data_user = User::FirstWhere('uuid', $request->show);
            }
            else{
                $data_user = User::FirstWhere('uuid', Auth::user()->uuid);
            }

            $data_follow = Follow::FirstWhere('from', Auth::user()->id);

            return view('pages.profile.profile', compact('data_user', 'data_follow'));
        }

    // followers page
        public function followers(){
            return view('pages.profile.followers');
        }

    // following page
        public function following(){
            return view('pages.profile.following');
        }
}
