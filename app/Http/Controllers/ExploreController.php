<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\User;
use App\Models\Photo;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    public function show( Request $request, Photo $photo){
        $data_follow = Follow::FirstWhere('from', Auth::user()->id);
        $data_user  = User::FirstWhere('id', $photo->user_id);
        $data_favorite = Favorite::where('photo_id', $photo->id)->where('user_id', Auth::user()->id)->exists();

        return view('pages.image-detail', compact('photo', 'data_follow', 'data_user', 'data_favorite'));
    }
}
