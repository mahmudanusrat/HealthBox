<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('user');
    }

    public function appointment()
    {
       $dctr=Doctor::all();

        return view('user.appointment',compact('dctr'));
    }
    public function bmi(){
        return view('user.bmi');
    }
    public function bmis(Request $request){
       //dd($request->all());
     $mass=$request->weight;
        $height=$request->height * 0.3048;

            $bmi = $mass/($height*$height);

        if ($bmi <= 18.5) {
            $output = "UNDERWEIGHT";

        } else if ($bmi > 18.5 AND $bmi<=24.9 ) {
            $output = "NORMAL WEIGHT";

        } else if ($bmi > 24.9 AND $bmi<=29.9) {
            $output = "OVERWEIGHT";

        } else if ($bmi > 30.0) {
            $output = "OBESE";
        }

        return redirect()->back()->with(array('bmi'=>$bmi,'output'=>$output));

    }
    public function report(){
     $report=DB::table('appointments')
         ->where('appointments.user_id',Auth::id())
         ->join('serials','serials.appointment_id','=','appointments.id')
         ->join('doctors','doctors.id','=','serials.doctor_id')
         ->get();
     //dd($report);
     return view('user.report',compact('report'));
    }

}
