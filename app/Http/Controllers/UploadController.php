<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadController extends Controller
{
    //upload page
        public function index(){
            $categories = Category::all();
            return view('pages.upload', compact('categories'));
        }

    // upload store
        public function store(Request $request){
            $request->validate([
                'photo_title' => ['required'],
                'photo_description' => ['required'],
                'category' => ['required'],
                'photo' => ['required', 'mimes:png,jpg,jpeg,gif']
            ]);

            $photo_file = $request->file('photo');
            $photo_extention = $photo_file->extension();
            $photo_name = date('ymdhis').'.'.$photo_extention;
            $photo_file->move(public_path('assets/img/img-e/'), $photo_name);

            $photo_data = [
                'photo_title' => $request->photo_title,
                'photo_description' => $request->photo_description,
                'file_location' => $photo_name,
                'album_id' => $request->album,
                'category_id' => $request->category,
                'user_id' => Auth::user()->id,
                'allow_comments' => is_null($request->allow_comments) ? '1' : $request->allow_comments
            ];

            Photo::create($photo_data);
            return back();
        }
}
