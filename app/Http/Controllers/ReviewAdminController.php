<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Support\Str;
use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewAdminController extends Controller
{
    //review page
    public function index(){
        $data_reviews = Photo::where('status_active', '0')->with('category', 'user')->paginate(20);
        return view('pages.review.review', compact('data_reviews'));
    }

    // show review
    public function show(Photo $photo ){
        return view('pages.review.review-detail', compact('photo'));
    }

    // store review
    public function store(Request $request, Photo $photo ){
        $request->validate([
            'set_status'    =>  ['required'],
            'message'       =>['required']
        ]);

        $photo->update(['status_active' => $request->input('set_status')]);
        
        $notification_data = [
            'from'  => Auth::user()->id,
            'to'    => $photo->user->id,
            'message'   => $request->message,
            'uuid'   => Str::uuid()
        ];

        Notification::create($notification_data);

        if ($request->set_status == 1) {
            app('flasher')->addWarning('photo successfully published.');
            return redirect('/review');
        }
        else{
            app('flasher')->addWarning('photo has been rejected.');
            return redirect('/review');
        }
    }
}
