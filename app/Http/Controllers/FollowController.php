<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    //store follow
    public function store(Request $request){
        $userIdentifier = $request->input('user_identifier');

        $data_follow = [
            'from'  => Auth::user()->id,
            'to'    => $userIdentifier
        ];

        $data_follow_check = Follow::Where('from', Auth::user()->id)->First();

        if ($data_follow_check && $data_follow_check->to !== $userIdentifier) {
            // unfollow
            $data_follow_check->delete();
        }
        else{
            // follow 
            Follow::create($data_follow);

        }
    }
}
