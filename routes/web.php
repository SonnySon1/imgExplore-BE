<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteController;
use App\Models\Favorite;

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

    Route::get('/review', [ReviewController::class, 'index']);
    Route::get('/review/detail', [ReviewController::class, 'show']);
    Route::get('/upload', [UploadController::class, 'index']);
    Route::post('/upload/store', [UploadController::class, 'store']);
    Route::get('/signout', [SigninController::class, 'signout']);
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::get('/profile/favorite', [FavoriteController::class, 'index']);
});
