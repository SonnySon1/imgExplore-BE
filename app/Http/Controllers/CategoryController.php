<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //categories page
        public function index(){
            return view('pages.categories');
        }
}
