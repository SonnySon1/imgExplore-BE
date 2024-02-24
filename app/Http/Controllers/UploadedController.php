<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UploadedController extends Controller
{
    //uploaded page
    public function index(){
        $data_uploadeds = Photo::where('user_id', Auth::user()->id)->where('status_active', '1')->with('category')->paginate(20); 
        return view('pages.uploaded.uploaded', compact('data_uploadeds'));
    }
    
    // edit view
    public function edit( Photo $photo ){
        $categories = Category::all();
        $albums = Album::where('user_id', Auth::user()->id)->get();
        return view('pages.uploaded.update-uploaded', compact('photo', 'categories', 'albums'));
    }

    // update photo
    public function update(Request $request, Photo $photo){
        $request->validate([
            'photo_title' => ['required'],
            'photo_description' => ['required'],
            'category' => ['required'],
        ]);

        $data_photo_update = [
            'photo_title' => $request->photo_title,
            'photo_description' => $request->photo_description,
            'category_id' => $request->category,
            'album_id' => $request->album,
            'allow_comments' => is_null($request->allow_comments) ? '1' : $request->allow_comments,
        ];

        $photo->update($data_photo_update);

        return redirect('/uploaded')->with('One photo was updated successfully');

    }
}
