<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    //review page
    public function index(){
        return view('pages.review.review');
    }

    public function show(){
        return view('pages.review.review-detail');
    }
}
