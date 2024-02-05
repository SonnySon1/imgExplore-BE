<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //profile page
        public function index(){
            return view('pages.profile.profile');
        }
}
