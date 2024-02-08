<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersAdminController extends Controller
{
    //page user 
    public function index(){
        return view('pages.users.users');
    }


    //page user 
    public function edit(){
        return view('pages.users.update-users');
    }
}
