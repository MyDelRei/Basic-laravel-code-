<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct(){
        $this -> middleware(['guest']);
    }
    //
    public function index(){

       
        return view("auth.login");
    }


    public function login(Request $request){


        $candidate = $request->validate([
            "email"=> ['required','email'],
            "password"=> ["required"],
           ]);

           $rememberMeToken = $request->rememberMe; //remember me from name checkbox in html

        $ValidCandidate = auth()->attempt($candidate,$rememberMeToken);
        if($ValidCandidate){
            return redirect()->route('dashboard')->with('success','Welcome Back');
        }
        else{
            return back()->with('status','Invalid Candidate');
        }

    }
}
