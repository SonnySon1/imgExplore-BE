<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AlbumController extends Controller
{
    //page album
        public function index(Request $request) {
            $data_user = User::firstWhere('uuid', $request->input('show', Auth::user()->uuid));
            $data_albums = Album::where('user_id', $data_user->id);

            if ($request->has('search')) {
                $data_albums->where('album_name', 'LIKE', '%'. $request->search .'%');
            }

            $data_albums = $data_albums->get();
            return view('pages.album.album', compact('data_albums', 'data_user'));
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
                'description'    => $request->description,
                'uuid'           => Str::uuid()
            ];
            
            Album::create($data_album_store);
            return redirect('/album')->with('warning', 'successfully added a new album');
        }

    // page detail
        public function show(Request $request, Album $album){
            $data_photos = Photo::where('album_id', $album->id);

            if ($request->has('search')) {
                $data_photos->where('photo_title', $request->search);
            }

            $data_photos = $data_photos->paginate(12);
            $data_user = User::FirstWhere('id', $album->user_id);
            return view('pages.album.detail-album', compact('data_photos', 'album', 'data_user'));
        }

    // page album edit
        public function edit(Album $album){
            return view('pages.album.update-album', compact('album'));
        }

    // update album
        public function update(Request $request, Album $album){
                $request->validate([
                    'album_name'    => ['required', 'unique:albums,album_name,'.$album->id],
                    'description'   => ['required']
                ]);
                
                $data_album_update = [
                    'album_name'    => $request->album_name,
                    'description'   => $request->description
                ];

                if ($request->hasFile('cover')) {
                    $request->validate([
                        'cover' => ['mimes:png,jpg, jpeg, gif'],
                    ]);

                    $cover_file = $request->file('cover');
                    $cover_extention = $cover_file->extension();
                    $cover_name = date('dmyhis').'.'.$cover_extention;
                    $cover_file->move(public_path('/assets/img/cover/albums/'), $cover_name);

                    File::delete(public_path('/assets/img/cover/albums/'. $album->cover));
                    $data_album_update['cover'] = $cover_name;
                }

                $album->update($data_album_update);
                return redirect('/album')->with('warning', 'successfully updated one album');
        }

}
