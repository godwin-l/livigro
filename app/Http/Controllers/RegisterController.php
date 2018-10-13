<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class RegisterController extends Controller {
   public function registerform(){
      return view('register');
   }
	
   public function registeruser(Request $request){
      $name = $request->input('name');
	  $email = $request->input('email');
	  $password = $request->input('password');
	  $token = $request->input('_token');
	  $current_time = Carbon::now()->toDateTimeString();
      DB::insert('insert into users (name,email,password,remember_token,created_at,updated_at) values(?,?,?,?,?,?)',[$name,$email,$password,$token,$current_time,$current_time]);
      echo "Registered successfully.<br/>";
   }
}