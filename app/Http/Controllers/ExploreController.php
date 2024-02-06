<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //explore page
    public function index() {
        return view('pages.explore');
    }

    // show page
    public function show(){
        return view('pages.image-detail');
    }
}
