<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('home');
})->middleware(['guest']);

Route::get('/create-user', function () {
    return view('register');
});

Route::get('/edit-profile/{user_id}', function () {
    return view('edit-profile');
});

Route::get('/newsfeed', function () {
    return view('newsfeed');
})->middleware(['auth']);

Route::get('/profile/{user_id}', function () {
    return view('profile');
});

Route::get('/post/{post_id}', function () {
    return view('single-post');
});

