<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    //favorite page
        public function index(Request $request){
            $data_favorites = Favorite::Where('user_id', Auth::user()->id)->with('user', 'photo')->get();
            return view('pages.profile.favorite', compact('data_favorites'));
        }

        public function store(Request $request) {

            $photo = $request->input('photo_identifier');

            $data_favorite = [
                'photo_id'    => $photo,
                'user_id'  => Auth::user()->id,
            ];
            $data_favorite_check = Favorite::Where('user_id', Auth::user()->id)->first();
            if ($data_favorite_check) {
                // unfollow
                $data_favorite_check->delete();
            }
            else{
                // follow 
                Favorite::create($data_favorite);

            }
        }
}
