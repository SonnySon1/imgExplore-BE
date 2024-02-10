<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewAdminController extends Controller
{
    //review page
    public function index(){
        $data_reviews = Photo::where('status_active', '0')->with('category', 'user')->get();
        return view('pages.review.review', compact('data_reviews'));
    }

    // show review
    public function show(Photo $photo ){
        return view('pages.review.review-detail', compact('photo'));
    }

    // store review
    public function store(Request $request, Photo $photo ){
        $request->validate([
            'set_status'    =>  "required",
            'message'       =>'required'
        ]);

        $photo->update(['status_active' => $request->input('set_status')]);
        
        $notification_data = [
            'from'  => Auth::user()->id,
            'to'    => $photo->user->id,
            'message'   => $request->message
        ];

        Notification::create($notification_data);

        if ($request->set_status == 1) {
            return redirect('/review')->with('success', 'photo successfully published');
        }
        else{
            return redirect('/review')->with('error', 'photo has been rejected');
        }
    }
}
