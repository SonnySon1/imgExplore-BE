<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //page notification
    public function index(){
        $notifications = Notification::latest()->with('userFrom', 'userTo')->where('to', Auth::user()->id)->paginate(5);
        return view('pages.notification.notification', compact('notifications'));
    }
    public function show(Notification $notification){
        return view('pages.notification.notification-detail', compact('notification'));
    }
}
