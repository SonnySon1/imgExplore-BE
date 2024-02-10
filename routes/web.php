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
Route::get('/explore/detail', [ExploreController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);

Route::middleware('auth')->group(function(){
    Route::get('/dashboard', function(){
        return view('pages.dashboard');
    });

    Route::get('/uploaded', [UploadedController::class, 'index']);
    Route::get('/uploaded/edit', [UploadedController::class, 'edit']);

    Route::get('/review', [ReviewAdminController::class, 'index']);
    Route::get('/review/detail={photo:uuid}', [ReviewAdminController::class, 'show']);
    Route::post('/review/detail/store={photo:uuid}', [ReviewAdminController::class, 'store']);

    Route::get('/upload', [UploadController::class, 'index']);
    Route::post('/upload/store', [UploadController::class, 'store']);

    Route::get('/signout', [SigninController::class, 'signout']);

    Route::get('/album', [AlbumController::class, 'index']);
    Route::get('/album/detail', [AlbumController::class, 'show']);
    Route::get('/album/create', [AlbumController::class, 'create']);
    Route::get('/album/edit', [AlbumController::class, 'edit']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/favorite', [FavoriteController::class, 'index']);
    Route::get('/profile/followers', [ProfileController::class, 'followers']);
    Route::get('/profile/following', [ProfileController::class, 'following']);

    Route::get('/admin/category', [CategoryAdminController::class, 'index']);
    Route::get('/admin/category/create', [CategoryAdminController::class, 'create']);
    Route::get('/admin/category/edit', [CategoryAdminController::class, 'edit']);
    
    Route::get('/admin/users', [UsersAdminController::class, 'index']);
    Route::get('/admin/users/edit', [UsersAdminController::class, 'edit']);


    Route::get('/notification', [NotificationController::class, 'index']);
    Route::get('/notification/detail', [NotificationController::class, 'show']);


});
