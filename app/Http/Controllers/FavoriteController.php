<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    //favorite page
        public function index(){
            return view('pages.profile.favorite');
        }
}
