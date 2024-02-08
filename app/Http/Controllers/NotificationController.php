<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    //page notification
    public function index(){
        return view('pages.notification.notification');
    }

    //page notification detail
    public function show(){
        return view('pages.notification.notification-detail');
    }
}
