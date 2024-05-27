<?php

namespace App\Http\Controllers\doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Serial;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Appointment;

class DoctorController extends Controller
{

    public function index()
    {

      $dctr=DB::table('users')
           ->where('users.id',Auth::id())
           ->join('doctors','doctors.user_id','=','users.id')
            ->get();

        return view('doctor.index',compact('dctr'));



    }
    public function dashboard()
    {
        //$patient=Appointment::where('doctor_id',Auth::id())->get();
        $patient=DB::table('appointments')
            ->where('appointments.doctor_id',Auth::id())
            ->join('serials','serials.appointment_id','=','appointments.id')->orderBy('serial_id','asc')
            //->where('appointments.date',date('Y-m-d'))
            //->where('serials.status','w')
            ->get();

        return view('doctor.doctorDashboard',compact('patient'));
    }

    public function allPatient()
    {
        $patient=Appointment::where('doctor_id',Auth::id())->get();
        return view('doctor.allPatient',compact('patient'));
    }
    public function allDoctors()
    {
        $dctr=Doctor::all();
        return view('doctor.allDoctors',compact('dctr'));
    }

    public function editDoctors(){
        $dctr=DB::table('users')
            ->where('users.id',Auth::id())
            ->join('doctors','doctors.user_id','=','users.id')
            ->get();
           // dd($dctr);
        return view('doctor.editDoctor',['dctr'=>$dctr]);
    }
    public function editDoctorsUpload(Request $request){

       $dctr1= Doctor::where('user_id',Auth::id())->first();
       //dd($dctr1);
           $dctr1->d_name=$request->d_name;
           $dctr1->speciality=$request->speciality;
           $dctr1->description=$request->description;
           $dctr1->medical_degree=$request->medical_degree;
           $dctr1->phone=$request->phone;
           $dctr1->email=$request->email;
           if ($request->hasfile('image')){
               $ImageName=time().'.'.$request->image->extension();
               $request->image->move(public_path('doctor/images/profile'), $ImageName);
               $dctr1->image=$ImageName;
           }

           $dctr1->save();
           return redirect()->back();

    }
    public function details($id){
        $patient=Appointment::where('id',$id)->get();
        //dd($patient);
        return view('doctor.detailsPrescription',compact('patient'));
    }
    public function reportUpload($id ,Request $request){
               // dd($id);
                $report=Serial::where('appointment_id',$id)->where('doctor_id',Auth::id())->first();
               //dd($report);
                $report->report=$request->report;
                $report->medicine=$request->medicine;
                $report->aboutPatient=$request->aboutPatient;
                $report->status='Done';
                $report->save();
                return redirect()->back();
                //dd($report);
    }

}
