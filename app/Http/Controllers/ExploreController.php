<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //explore page
    public function index() {
        $photos = Photo::where('status_active', '1')->paginate(15);
        return view('pages.explore', compact('photos'));
    }

    // load more foto
    public function loadMorePhotos() {
        $photos = Photo::paginate(15);
        return response()->json($photos);
    }

    // show page
    public function show(Photo $photo){
        return view('pages.image-detail', compact('photo'));
    }
}
