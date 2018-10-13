<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\model\User;
class UserController extends Controller
{
    
    public function login(Request $request){
        
        $this->validate($request,['email'=>'required','password'=>'required']);
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email',$email)->where('password',$password)->get();
        if($user->count()){
            return view('home.header')->with('user',$user);
        }
            else{
                return view('home.header')->with('error',"User not found");
            }
    }
    
    public function register(Request $request){
        $this->validate($request,['name'=>'required','email'=>'required','password'=>'required']);
        if(User::where('email',$email)->count()){
            return view('home.header')->with('error','User already exist');
        }
        else{
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return view('home.header')->with('success','Registered successfully');
        }
    }
}
