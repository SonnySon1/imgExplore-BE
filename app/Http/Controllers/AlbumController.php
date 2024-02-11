<?php

namespace App\Http\Controllers;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlbumController extends Controller
{
    //page album
        public function index() {
            $data_albums = Album::where('user_id', Auth::user()->id)->get();
            return view('pages.album.album', compact('data_albums'));
        }

    // page album create
        public function create(){
            return view('pages.album.add-album');
        }

    // store 
        public function store(Request $request){
            $request->validate([
                'cover'         => ['required', 'mimes:png,jpg, jpeg, gif'],
                'album_name'    => ['required', 'unique:albums,album_name'],
                'description'   => ['required']
            ]);

            $cover_file         = $request->file('cover');
            $cover_extention    = $cover_file->extension();
            $cover_name         = date('dmyhis').'.'. $cover_extention;
            $cover_file->move(public_path('/assets/img/cover/albums/'), $cover_name);

            $data_album_store =[
                'cover'          => $cover_name,
                'album_name'     => $request->album_name,
                'user_id'        => Auth::user()->id,
                'description'    => $request->description
            ];
            
            Album::create($data_album_store);
            return redirect('/album')->with('success', 'successfully added a new album');
        }

    // page detail
        public function show(Album $album){
            $data_photos = Photo::where('album_id', $album->id)->get();
            return view('pages.album.detail-album', compact('data_photos', 'album'));
        }

    // page album edit
        public function edit(){
            return view('pages.album.update-album');
        }

}
