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


    // Static Pages

    public function about(){
        return view('static.about');
    }

    public function corporate(){
        return view('static.corporate');
    }

    public function diagnostics(){
        return view('static.diagnostics');
    }

    public function diagnostics_notify(){
        return view('static.diagnostics_notify');
    }

    public function doctor3(){
        return view('static.doctor-3');
    }

    public function doctor4(){
        return view('static.doctor-4');
    }

    public function enquiry(){
        return view('static.enquiry');
    }

    public function essentialhealthp(){
        return view('static.essential-health-p');
    }

    public function executivehealthcheckup(){
        return view('static.executive-health-checkup');
    }

    public function healthcheckuppackages(){
        return view('static.healthcheckuppackages');
    }
    
    public function personal_health(){
        return view('static.personal_health');
    }
    public function personalhealth2(){
        return view('static.personalhealth-2');
    }
    public function premiumhealthcheckup(){
        return view('static.premium-health-checkup');
    }

    public function privacy(){
        return view('static.privacy');
    }

    public function refundpolicy(){
        return view('static.refund-policy');
    }

    public function termsofuse(){
        return view('static.termsofuse');
    }


}
