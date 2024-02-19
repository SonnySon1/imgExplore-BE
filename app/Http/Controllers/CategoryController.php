<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //categories page
        public function index(){
            $categories = Category::all();
            return view('pages.categories', compact('categories'));
        }

   
}
