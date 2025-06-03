<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //

    public function __construct(){
        $this->middleware("auth");
    }

    public function index(){

        $posts = Post::latest()->with(['user','likes'])->paginate(3);
        return view("posts.index",[
            "posts"=> $posts,
        ]);
    }

    public function post(Request $request){
        
        // store attribute
        $rules = [
            'body' => 'required|string',
        ];

        //check validation
        $validatedData = $request->validate(rules: $rules);

        $postData = [
            "body" => $validatedData['body'],
        ];


      


        //creating post no need id cuz laravel will do it for us
        $request->user()->userPost()->create($postData);

        return back();

    
    }

    public function deletePost(Post $post){
        // dd($post);

        $this->authorize('delete', $post);

        $post->delete();
        return back();
    }
}
