<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Like;

class PostLikeController extends Controller
{

    public function __construct(){
        $this->middleware("auth");
    }
    public function like(Post $post,Request $request){
        
        // if(!$post->likedBy($request->user->id)){
        //     return response(null,409);
        // }

        $post->likes()->create([
            'user_id' => $request->user()->id,
        ]);



        return back();

    }

    public function unlike(Post $post,Request $request){
        // delete like table where the user in user table in like table on user that like the post on post id
        $request->user()->likes()->where('post_id', $post->id)->delete();

        return back();
    }
}
