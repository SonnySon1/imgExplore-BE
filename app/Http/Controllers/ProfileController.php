<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Photo;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

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
            $photo_count = Photo::where('status_active', '1')->where('user_id', $data_user->id)->get();
            return view('pages.profile.profile', compact('data_user', 'data_follow', 'photo_count'));
        }

     // load more photos 
        public function loadMorePhotosByUser(Request $request) {
            $data_user = User::FirstWhere('uuid', $request->get('uuid'));
            $photos = Photo::where('status_active', '1')->where('user_id', $data_user->id)->paginate(15, ['*'], 'page', $request->get('page'));
            return response()->json($photos);
        }

    // profile edit
        public function edit(User $user) {
            return view('pages.profile.update-profile', compact('user'));
        }

    // profile update   
        public function update(Request $request, User $user) {
            $request->validate([
                'name'  => ['required'],
                'email' => ['required', 'unique:users,email,'.$user->id],
                'bio'   => ['required']
            ]);

            $data_user = [
                'name'  => $request->name,
                'email' => $request->email,
                'bio'   => $request->bio
            ];

            if ($request->hasFile('picture')) {
                $request->validate([
                    'picture'=> ['required', 'mimes:png,jpg, jpeg, gif']
                ]);
                $picture_file = $request->file('picture');
                $picture_extention = $picture_file->extension();
                $picture_name   = date('dmyhis').'.'.$picture_extention;
                $picture_file->move(public_path('/assets/img/profile/'), $picture_name);        

                $picture_default_check = [
                    'picture1.jpg',
                    'picture2.png',
                    'picture3.jpg',
                    'picture4.jpg'
                ];
                if (!in_array($user->picture, $picture_default_check)) {
                    File::delete(public_path('/assets/img/profile/'. $user->picture));
                }

                $data_user['picture'] = $picture_name;
            }
            

            $user->update($data_user);
            return redirect('/profile');
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
