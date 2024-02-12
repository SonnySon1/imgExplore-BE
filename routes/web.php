<?php

use App\Models\Favorite;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;
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
    
    Route::get('/', function () {
        return view('pages.home');
    });
});


Route::get('/explore', [ExploreController::class, 'index']);
Route::get('/explore/show={photo:uuid}', [ExploreController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        return view('pages.dashboard');
    });

    Route::get('/uploaded', [UploadedController::class, 'index']);
    Route::get('/uploaded/edit', [UploadedController::class, 'edit']);

    Route::get('/review', [ReviewAdminController::class, 'index']);
    Route::get('/review/show={photo:uuid}', [ReviewAdminController::class, 'show']);
    Route::post('/review/show/store={photo:uuid}', [ReviewAdminController::class, 'store']);

    Route::get('/upload', [UploadController::class, 'index']);
    Route::post('/upload/store', [UploadController::class, 'store']);

    Route::get('/signout', [SigninController::class, 'signout']);

    Route::get('/album', [AlbumController::class, 'index']);
    Route::get('/album/show={album:uuid}', [AlbumController::class, 'show']);
    Route::get('/album/create', [AlbumController::class, 'create']);
    Route::post('/album/store', [AlbumController::class, 'store']);
    Route::get('/album/edit={album:uuid}', [AlbumController::class, 'edit']);
    Route::post('/album/update={album:uuid}', [AlbumController::class, 'update']);


    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/favorite', [FavoriteController::class, 'index']);
    Route::get('/profile/followers', [ProfileController::class, 'followers']);
    Route::get('/profile/following', [ProfileController::class, 'following']);

    Route::get('/admin/category', [CategoryAdminController::class, 'index']);
    Route::get('/admin/category/create', [CategoryAdminController::class, 'create']);
    Route::post('/admin/category/store', [CategoryAdminController::class, 'store']);
    Route::get('/admin/category/edit={category:name}', [CategoryAdminController::class, 'edit']);
    Route::post('/admin/category/update={category:name}', [CategoryAdminController::class, 'update']);
    Route::get('/admin/category/delete={category:name}', [CategoryAdminController::class, 'destroy']);
    
    Route::get('/admin/users', [UsersAdminController::class, 'index']);
    Route::get('/admin/users/edit', [UsersAdminController::class, 'edit']);


    Route::get('/notification', [NotificationController::class, 'index']);
    Route::get('/notification/show', [NotificationController::class, 'show']);


});
