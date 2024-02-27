<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\User;
use App\Models\Photo;
use App\Models\Follow;
use App\Models\Comment;
use App\Models\Category;
use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExploreController extends Controller
{
    //explore page
    public function index() {
        $categories = Category::paginate(10);
        return view('pages.explore', compact('categories'));
    }

    // load more foto
    public function loadMorePhotos(Request $request) {
        if ($request->get('category')) {
            $category = Category::where('name', $request->category)->first();
            $photos = Photo::where('status_active', '1')->where('category_id', $category->id)->paginate(15, ['*'], 'page', $request->get('page'));
        }elseif ($request->get('search')) {

            $photos = Photo::where('status_active', '1')->where('photo_title', 'LIKE', '%'.$request->get('search').'%')->paginate(15, ['*'], 'page', $request->get('page'));
        }
        else{
            $photos = Photo::where('status_active', '1')->paginate(15, ['*'], 'page', $request->get('page'));
        }
        return response()->json($photos);
    }
    

    // show page
    public function show( Request $request, Photo $photo){
        $data_follow = Follow::FirstWhere('from', Auth::user()->id);
        $data_user  = User::FirstWhere('id', $photo->user_id);
        $data_favorite = Favorite::where('photo_id', $photo->id)->where('user_id', Auth::user()->id)->exists();
        $data_like = Like::where('photo_id', $photo->id)->where('user_id', Auth::user()->id)->exists();
        $data_like_counter = Like::where('photo_id', $photo->id)->get();
        $data_count_comment = Comment::where('photo_id', $photo->id)->count();
        return view('pages.image-detail', compact('photo', 'data_follow', 'data_user', 'data_favorite', 'data_like', 'data_like_counter', 'data_count_comment'));
    }

    // load more comment
    public function loadMoreComment(Request $request) {
        $data_photo = Photo::FirstWhere('uuid',  $request->get('photo'));
        $comment = Comment::latest()->with('user')->where('photo_id', $data_photo->id)->paginate(15, ['*'], 'page', $request->get('page'));
        return response()->json($comment);

    }



    // like
    public function storeLike(Request $request){
        $photo = $request->input('photo_identifier');

        $data_favorite = [
            'photo_id'    => $photo,
            'user_id'  => Auth::user()->id,
        ];
        
        $data_like_check = Like::where('photo_id', $photo)->where('user_id', Auth::user()->id)->first();
    
        if ($data_like_check) {
            // unlike
            $data_like_check->delete();
        }
        else{
            // like 
            Like::create($data_favorite);
        }
    }


    // comment
    public function storeComment(Request $request){
        $data_comment = [
            'photo_id'   => $request->photo,
            'user_id'   => Auth::user()->id,
            'body_comment'  => $request->body_comment
        ];

        Comment::create($data_comment);
    }
}
