<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Models\User;

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

//------------------------- Authenticated Routes ------------------------
Route::middleware(['auth'])->group(function () {

    Route::get('/newsfeed', [UserController::class, 'showNewsfeed'])->name('newsfeed');
    Route::get('/edit-profile/{user_id}', [UserController::class, 'editProfile'])->name('edit.profile');
    Route::post('/update-profile',[UserController::class,'updateUserProfile'])->name('update.profile');
    Route::resource('post', PostController::class)->except(['create']);
      
});
//-----------------------------------------------------------------------


//-------------------------- Guest Routes ------------------------------
Route::middleware(['guest'])->group(function () {
    
    Route::view('/', 'home');
    Route::view('/create-user', 'register');

});
//----------------------------------------------------------------------

//------------------------- Public Routes ------------------------------
Route::get('/profile/{user_id}', [UserController::class, 'showProfile']);

Route::get('/post/{post_id}', function () {
    return view('single-post');
});
//----------------------------------------------------------------------

