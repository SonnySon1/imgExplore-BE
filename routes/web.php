<?php

use App\Models\Favorite;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\UploadedController;
use App\Http\Controllers\FollowersController;
use App\Http\Controllers\UsersAdminController;
use App\Http\Controllers\ReviewAdminController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\CategoryAdminController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function(){
    Route::get('/signup', [SignupController::class, 'index']);
    Route::post('/signup', [SignupController::class, 'store']);
    
    Route::get('/signin', [SigninController::class, 'index'])->name('login');
    Route::post('/signin', [SigninController::class, 'store']);
    
    Route::get('/auth/google', [GoogleController::class, 'redirectToGoogle']);
    Route::get('/auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);

    Route::get('/', function () {
        return view('pages.home');
    });
    Route::get('/about', function () {
        return view('pages.about');
    });
});


Route::get('/explore', [ExploreController::class, 'index']);
Route::get('/load-more-photos-explore', [ExploreController::class, 'loadMorePhotos']);
Route::get('/load-more-comment-explore', [ExploreController::class, 'loadMoreComment']);


Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/load-more-categories', [CategoryController::class, 'loadMoreCategories' ]);

Route::middleware('auth')->group(function(){
    Route::get('/explore/show={photo:uuid}', [ExploreController::class, 'show']);
    Route::post('/explore/like/store', [ExploreController::class, 'storeLike']);
    Route::post('/explore/comment/store', [ExploreController::class, 'storeComment']);

    Route::get('/dashboard', [DashboardController::class, 'index']);



    Route::get('/uploaded', [UploadedController::class, 'index']);
    Route::get('/uploaded/edit={photo:uuid}', [UploadedController::class, 'edit']);
    Route::post('/uploaded/update={photo:uuid}', [UploadedController::class, 'update']);

    Route::get('/upload', [UploadController::class, 'index']);
    Route::post('/upload/store', [UploadController::class, 'store']);

    Route::get('/signout', [SigninController::class, 'signout']);

    Route::get('/album', [AlbumController::class, 'index']);
    Route::get('/album/show={album:uuid}', [AlbumController::class, 'show']);
    Route::get('/album/create', [AlbumController::class, 'create']);
    Route::post('/album/store', [AlbumController::class, 'store']);
    Route::get('/album/edit={album:uuid}', [AlbumController::class, 'edit']);
    Route::post('/album/update={album:uuid}', [AlbumController::class, 'update']);
    Route::get('/album/delete={album:uuid}', [AlbumController::class, 'destroy']);


    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/edit={user:uuid}', [ProfileController::class, 'edit']);
    Route::post('/profile/update={user:uuid}', [ProfileController::class, 'update']);
    Route::get('/profile/favorite', [FavoriteController::class, 'index']);
    Route::post('/profile/favorite/store', [FavoriteController::class, 'store']);
    Route::get('/profile/followers={user:uuid}', [ProfileController::class, 'followers']);
    Route::get('/profile/following={user:uuid}', [ProfileController::class, 'following']);
    Route::get('/load-more-photos-user', [ProfileController::class, 'loadMorePhotosByUser']);

    Route::get('/notification', [NotificationController::class, 'index']);
    Route::get('/notification/show={notification:uuid}', [NotificationController::class, 'show']);

    Route::post('/follow/user', [FollowController::class, 'store']);
});

Route::middleware('admin')->group(function(){
    Route::get('/review', [ReviewAdminController::class, 'index']);
    Route::get('/review/show={photo:uuid}', [ReviewAdminController::class, 'show']);
    Route::post('/review/show/store={photo:uuid}', [ReviewAdminController::class, 'store']);

    Route::get('/admin/category', [CategoryAdminController::class, 'index']);
    Route::get('/admin/category/create', [CategoryAdminController::class, 'create']);
    Route::post('/admin/category/store', [CategoryAdminController::class, 'store']);
    Route::get('/admin/category/edit={category:name}', [CategoryAdminController::class, 'edit']);
    Route::post('/admin/category/update={category:name}', [CategoryAdminController::class, 'update']);
    Route::get('/admin/category/delete={category:name}', [CategoryAdminController::class, 'destroy']);
    
    Route::get('/admin/users', [UsersAdminController::class, 'index']);
    Route::get('/admin/users/edit={user:uuid}', [UsersAdminController::class, 'edit']);
    Route::post('/admin/users/update={user:uuid}', [UsersAdminController::class, 'update']);
});