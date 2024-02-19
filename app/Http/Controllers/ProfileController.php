<?php

namespace App\Http\Controllers;

use App\Models\Follow;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Photo;

class ProfileController extends Controller
{
    //profile page
        public function index(Request $request){
            if ($request->show) {
                $data_user = User::FirstWhere('uuid', $request->show);
            }
            else{
                $data_user = User::FirstWhere('uuid', Auth::user()->uuid);
            }

            $data_follow = Follow::FirstWhere('from', Auth::user()->id);

            return view('pages.profile.profile', compact('data_user', 'data_follow'));
        }

        public function loadMorePhotosByUser(Request $request) {
            $data_user = User::FirstWhere('uuid', $request->get('uuid'));
            $photos = Photo::where('status_active', '1')->where('user_id', $data_user->id)->paginate(15, ['*'], 'page', $request->get('page'));
            return response()->json($photos);
        }

    // followers page
        public function followers(User $user){
            $followers = Follow::where('to', $user->id)->get();
            return view('pages.profile.followers', compact('followers', 'user'));
        }

    // following page
        public function following(User $user){
            $followings = Follow::where('from', $user->id)->get();
            return view('pages.profile.following', compact('followings', 'user'));
        }
}
