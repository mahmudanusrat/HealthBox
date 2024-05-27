<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function index(){
        if (!Auth::id()){
            return view('user');
        }elseif (Auth::user()->utype =='u'){
            return view('user');
        }
        return redirect()->back();
    }
    public function allDoctor(){
        $dctr=Doctor::all();
        if (!Auth::id()){
            return view('doctor',compact('dctr'));
        }elseif (Auth::user()->utype =='u'){
            return view('doctor',compact('dctr'));
        }
        return redirect()->back();
    }
        public function portfolio(){
        return view('portfolio');
     }

    public function contact(){
        return view('contact');
    }

    public function userblog(){
        return view('userblog');
    }



}
