<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    //upload page
        public function index(){
            return view('pages.upload');
        }

    // upload store
        public function store(Request $request){
            $request->validate([
                'photo_title' => 'required',
                'photo_description' => 'required',
                'category' => 'required',
            ]);

            $photo_data = [
                'photo_title' => $request->photo_title,
                'photo_description' => $request->photo_description,
                'file_location' => $request->photo,
                'album_id' => $request->album,
                'category_id' => $request->category,
                'user_id' => Auth::user()->id,
                'allow_comments' => is_null($request->allow_comments) ? '1' : $request->allow_comments
            ];

            Photo::create($photo_data);
            return back();
        }
}
