<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //explore page
        public function index() {
            return view('pages.explore');
        }
}
