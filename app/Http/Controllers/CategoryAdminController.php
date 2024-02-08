<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryAdminController extends Controller
{
    // page category
    public function index(){
        return view('pages.category.category');
    }

    // page  create
    public function create(){
        return view('pages.category.add-category');
    }
    
    // page  edit
    public function edit(){
        return view('pages.category.update-category');
    }
}
