<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    //page album
        public function index() {
            return view('pages.album.album');
        }

    // page album create
        public function create(){
            return view('pages.album.add-album');
        }

    // page album edit
        public function edit(){
            return view('pages.album.update-album');
        }

}
