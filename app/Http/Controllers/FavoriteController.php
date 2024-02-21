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

            $photo = $request->photo_identifier;

            $data_favorite = [
                'photo_id'    => $photo,
                'user_id'  => Auth::user()->id,
            ];
            $data_favorite_check = Favorite::where('photo_id', $photo)->where('user_id', Auth::user()->id)->first();

            if ($data_favorite_check) {
                // remove favorite
                $data_favorite_check->delete();
            }
            else{
                // add favorite
                Favorite::create($data_favorite);
            }
        }
}
