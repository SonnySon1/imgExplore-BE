<?php

namespace App\Http\Controllers;

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

            return view('pages.profile.profile', compact('data_user'));
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
