<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;

class UserPostController extends Controller
{
    public function index(User $user){
     
        // dd($user);

       $posts = $user->userPost()->latest()->with(['user','likes'])->paginate(10);


        return view("posts.userpost",[
            "user"=> $user,
            "posts"=> $posts
        ]);
    }
}
