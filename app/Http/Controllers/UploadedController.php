<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadedController extends Controller
{
    //uploaded page
    public function index(){
        return view('pages.uploaded.uploaded');
    }
    
    // edit view
    public function edit(){
        return view('pages.uploaded.update-uploaded');
    }
}
