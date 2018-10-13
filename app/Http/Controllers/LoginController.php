<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class LoginController extends Controller {
   public function loginform(){
      return view('login');
   }
    
   public function loginuser(Request $request){
    $email = $request->input('email');
    $password = $request->input('password');

      $users = DB::select('select * from users');
      return view('authentication',['users'=>$users]);

 }

}