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
     
     // $users = DB::select('select * from users where email=$email AND password=$password')->first();
      $users = DB::table('users')->where('email', $email)->first();

      foreach ($users as $user) {
        $emaildb = $user->email;
        $passworddb = $user->password;

        if($email == $emaildb && $password == $passworddb)
        {
            return view('authentication',['users'=>$users]);
        }
        else
        {
            echo "failed";
        }
        
    }
      

 }

}