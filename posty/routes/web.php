<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\registerUserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use Illuminate\Support\Facades\Route;



Route::get('/post-page', function () {
    return view("posty.index");
});

Route::get('/user/{user}/post',[UserPostController::class,'index'])->name('user.posts');


Route::get('/', function (){
    return view('home');
})->name('home')
->middleware('auth');



Route::get('/register',[registerUserController::class,'index']) -> name('register');

Route::post('/register',[registerUserController::class,'store']);

Route::get('/dashboard',[dashboardController::class,'index'])
->name('dashboard');

Route::get('/posts',[PostController::class,'index'])
->name('posts');
Route::post('/posts',[PostController::class,'post']);
Route::delete('/posts/{post}',[PostController::class,'deletePost'])->name('posts.delete');


Route::post('/post/{post}/like',[PostLikeController::class,'like'])
->name('posts.like');
Route::delete('/post/{post}/like',[PostLikeController::class,'unlike'])
->name('posts.unlike');






Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'login']);


Route::post('/logout',[LogoutController::class,'logout'])->name('logout');
