<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadedController extends Controller
{
    //uploaded page
    public function index(){
        $data_uploadeds = Photo::where('user_id', Auth::user()->id)->with('category')->get(); 
        return view('pages.uploaded.uploaded', compact('data_uploadeds'));
    }
    
    // edit view
    public function edit(){
        return view('pages.uploaded.update-uploaded');
    }
}
