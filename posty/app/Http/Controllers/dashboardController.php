<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    //

    public function __construct(){
        $this -> middleware(['auth']);
    }
       
    public function index(){

        // dd(auth()->user()); checking user attribute

        // dd(auth()->user()->userPost); checking user many post
        return view('dashboard');
    }
}
