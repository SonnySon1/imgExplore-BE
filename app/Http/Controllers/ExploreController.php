<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    //explore page
    public function index() {
        return view('pages.explore');
    }

    // load more foto
    public function loadMorePhotos(Request $request) {
        $photos = Photo::where('status_active', '1')->paginate(15, ['*'], 'page', $request->get('page'));
        return response()->json($photos);
    }
    

    // show page
    public function show(Photo $photo){
        return view('pages.image-detail', compact('photo'));
    }
}
