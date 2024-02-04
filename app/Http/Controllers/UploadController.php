<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    //upload page
        public function index(){
            return view('pages.upload');
        }
}
