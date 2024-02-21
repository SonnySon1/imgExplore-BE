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
        $userIdentifier = $request->user_identifier;

        $data_follow = [
            'from'  => Auth::user()->id,
            'to'    => $userIdentifier
        ];

        $data_follow_check = Follow::where('from', Auth::user()->id)->where('to', $userIdentifier)->First();

        if ($data_follow_check) {
            // unfollow
            $data_follow_check->delete();
        }
        else{
            // follow 
            Follow::create($data_follow);
        }
    }
}
