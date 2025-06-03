<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registerUserController extends Controller
{

    public function __construct(){
        $this -> middleware(['guest']);
    }
    
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
       //thing to do 
       // validator

       // debug to see request email and password
       // dd($request->only('email','password'));


        //store the user
        $rules = [
            'name' => 'required|max:255',
            'username' => 'required|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' =>'required|min:8|confirmed'
        ];

        $validateDate = $request->validate($rules);

        // sign the user in 
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email','password')); // get that current user login
        


      
       
       // redirect to page login
       return redirect()->route('dashboard');
    }

}
