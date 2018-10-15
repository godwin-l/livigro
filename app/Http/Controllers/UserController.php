<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
        
use App\model\User;
class UserController extends Controller
{
    public function index(){
        return view('index');
    }
public function loginView(){
    return view('user.login')->with('error','')->with('success','');
}

public function registerView(){
    return view('user.register')->with('error','')->with('success','');
}

    public function login(Request $request){
        
       
        $this->validate($request,['email'=>'required','password'=>'required']);
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email',$email)->where('password',$password)->get();
        if($user->count()){
            return view('home.profile')->with('user',$user[0]);
            Session::put('user', $user[0]->id);
        }
            else{
                return view('user.login')->with('error',"User not found")->with('success','');;
            }
    }
    
    public function register(Request $request){
        
        $this->validate($request,['name'=>'required','email'=>'required','password'=>'required']);
        if(User::where('email',$request->input('email'))->count()){
            return view('user.register')->with('error','User already exist')->with('success','');
        }
        else{
        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return view('user.login')->with('success','Registered successfully')->with('error','');
        }
    }
}
