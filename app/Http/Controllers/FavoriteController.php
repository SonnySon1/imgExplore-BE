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
}
