<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //explore page
    public function index() {
        return view('pages.explore');
    }

    // show page
    public function show(Photo $photo){
        return view('pages.image-detail', compact('photo'));
    }
}
