<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function adminDashboard (){
        $appointment=DB::table('serials')
            ->where('serials.status','=','In Progress')
            ->join('appointments','appointments.id','=','serials.appointment_id')
            ->join('doctors','doctors.id','=','serials.doctor_id')
            ->get();
        $dctr=Doctor::all();
       // dd($appointment);
        return view('admin.adminDashboard',['appointment'=>$appointment,'doctor'=>$dctr]);

    }

    public function addAppointment (){
        return view('admin.addAppointment');

    }
    public function addAppointmentStore(Request $request)
    {
        $appoint=new Appointment();
        $appoint->p_name=$request->p_name;
        $appoint->email=$request->email;
        $appoint->phone=$request->phone;
        $appoint->doctor_id=$request->doctor_id;
        $appoint->date=$request->date;
        $appoint->message=$request->message;
        $appoint->age=$request->age;
        $appoint->bloodGroup=$request->bloodGroup;
        $appoint->save();

        return redirect()->back();
    }

    public function addBlog (){
        return view('admin.addBlog');

    }

    public function addDepartment (){
        return view('admin.addDepartment');

    }

    public function addDoctor (){
        return view('admin.addDoctor');

    }
    public function addDoctorStore(Request $request){
       // dd($request->all());
        $user=User::create($request->all());
            Doctor::create([
            'user_id'=>$user->id,
        ]);

        return redirect()->back();


    }

    public function addPatient (){
        return view('admin.addPatient');

    }

    public function addSchedule ($id){

        $dctr=Doctor::where('id',$id)->get();

        return view('admin.addSchedule',['doctor'=>$dctr]);

    }
    public function addScheduleUpload($id ,Request $request){
        $dctr=Doctor::where('id',$id)->first();
        //dd($request->all());
        $dctr->working_days=$request->working_days;
        $dctr->time=$request->time;
        $dctr->message=$request->message;
        $dctr->status=$request->status;
        $dctr->save();
        return redirect()->route('schedule');
    }
    public function addScheduleInactive($id){
        $dctr=Doctor::where('id',$id)->first();
        if ($dctr->status ==='Active'){
        $dctr->status='Inactive';
        }else{
            $dctr->status='Active';

        }
        $dctr->save();
        return redirect()->back();
    }

    public function appointment (){
        $appointment=DB::table('serials')
            ->join('appointments','appointments.id','=','serials.appointment_id')
            ->join('doctors','doctors.id','=','serials.doctor_id')
            ->get();
        return view('admin.appointments',['appointment'=>$appointment]);

    }

    public function blog (){
        return view('admin.blog');

    }

    public function blogDetails (){
        return view('admin.blogDetails');

    }

    public function chat (){
        return view('admin.chat');

    }
    public function departments (){
        return view('admin.departments');

    }
    public function doctors (){
            $dctr=Doctor::all();
        return view('admin.doctors',['doctor'=>$dctr]);

    }
    public function editBlog (){
        return view('admin.editBlog');

    }
    public function editDoctor (){
        return view('admin.editDoctor');

    }
    public function editProfile (){
        return view('admin.editProfile');

    }
    public function main (){
        return view('admin.main');

    }
    public function patients (){
        return view('admin.patients');

    }
    public function schedule (){
        $dctr=Doctor::all();
        return view('admin.schedule',['doctor'=>$dctr]);

    }
    public function settings (){
        return view('admin.settings');

    }
    public function voiceCall (){
        return view('admin.voiceCall');

    }

}
