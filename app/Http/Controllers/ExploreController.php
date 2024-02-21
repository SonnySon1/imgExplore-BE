<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use App\Models\Photo;
use App\Models\Follow;
use App\Models\Favorite;
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
        $data_like = Like::where('photo_id', $photo->id)->where('user_id', Auth::user()->id)->exists();
        $data_like_counter = Like::where('photo_id', $photo->id)->get();

        return view('pages.image-detail', compact('photo', 'data_follow', 'data_user', 'data_favorite', 'data_like', 'data_like_counter'));
    }

    // like
    public function storeLike(Request $request){
        $photo = $request->input('photo_identifier');

        $data_favorite = [
            'photo_id'    => $photo,
            'user_id'  => Auth::user()->id,
        ];
        
        $data_like_check = Like::where('photo_id', $photo)->where('user_id', Auth::user()->id)->first();
    
        if ($data_like_check) {
            // unlike
            $data_like_check->delete();
        }
        else{
            // like 
            Like::create($data_favorite);
        }
    }
}
