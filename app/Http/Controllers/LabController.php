<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\model\Labs;
class LabController extends Controller
{
    //
    public function labList(){
        $labs = Labs::all();
        Session::put('user', 2);
        return view('lab.list')->with('labs',$labs);
    }
    
    public function searchLab(Request $request){
        //$city = $request->input('city');
        //$test = $request->input('test');
        $labNname = $request->input('lab');
        $labs = Labs::where('name','ilike','%'.$labNname.'%')->get();
        return view('lab.list')->with('labs',$labs);
    }

    public function bookLab($id, Request $request){
        

    }
    public function viewLab($id, Request $request){
        $lab = Labs::where('id',$id)->get();
        return view('lab.view')->with('lab',$lab[0]);
       
    }
}
