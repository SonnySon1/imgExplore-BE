<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //profile page
        public function index(){
            return view('pages.profile.profile');
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
