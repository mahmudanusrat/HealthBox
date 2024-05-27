<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\AppointmentController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\User\BloodDonerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[IndexController::class,'index'])->name('index');
Route::get('/all-doctor',[IndexController::class,'allDoctor'])->name('all-doctor');
Route::get('/portfolio',[IndexController::class,'portfolio'])->name('portfolio');
Route::get('/contact',[IndexController::class,'contact'])->name('contact');
Route::get('/userblog',[IndexController::class,'userblog'])->name('userblog');

Auth::routes();
Route::post('/', function () {
Auth::logout();
return  redirect('/login');
});


Route::middleware(['auth','userPage'])->group(function (){
Route::get('/user-home', [\App\Http\Controllers\User\HomeController::class,'index'])->name('userHome');
Route::get('/user-appointment',[\App\Http\Controllers\User\HomeController::class,'appointment'])->name('userAppointment');
Route::post('/appointment-data',[AppointmentController::class,'store'])->name('appointment-data');
Route::get('/my-appointment',[AppointmentController::class,'index'])->name('myappointmemnt');

Route::get('/blood_bank',[BloodDonerController::class,'bloodbank']);
Route::get('/donate_blood',[BloodDonerController::class,'blooddonate']);
Route::post('/form_req',[BloodDonerController::class,'form']);
Route::get('/search_blood',[BloodDonerController::class,'srch']);
Route::get('/bmi',[\App\Http\Controllers\User\HomeController::class,'bmi'])->name('bmi');
Route::post('/bmis',[\App\Http\Controllers\User\HomeController::class,'bmis']);
Route::get('/report',[\App\Http\Controllers\User\HomeController::class,'report'])->name('report');
});
Route::middleware(['auth','doctorPage'])->group(function (){
Route::get('/home', [\App\Http\Controllers\doctor\DoctorController::class, 'index'])->name('home');
Route::get('/doctor-dashboard', [\App\Http\Controllers\doctor\DoctorController::class, 'dashboard'])->name('doctorDashboard');
Route::get('/all-patient', [\App\Http\Controllers\doctor\DoctorController::class, 'allPatient'])->name('allPatient');
Route::get('/all-doctors', [\App\Http\Controllers\doctor\DoctorController::class, 'allDoctors'])->name('allDoctors');
Route::get('/edit-doctors', [\App\Http\Controllers\doctor\DoctorController::class, 'editDoctors'])->name('editDoctors');
Route::post('/edit-doctors', [\App\Http\Controllers\doctor\DoctorController::class, 'editDoctorsUpload'])->name('editDoctorsUpload');
Route::get('/report-details/{id}',[\App\Http\Controllers\doctor\DoctorController::class,'details']);
Route::post('/report-upload/{id}',[\App\Http\Controllers\doctor\DoctorController::class,'reportUpload'])->name('prescriptionUpload');
});

Route::group(['middleware'=>['auth','adminPage']],function (){
Route::get('/admin-dashboard', [AdminController::class,'adminDashboard'])->name('adminDashboard');
Route::get('/add-appointment' , [AdminController::class,'addAppointment'])->name('addAppointment');
Route::post('/add-appointmentStore' , [AdminController::class,'addAppointmentStore'])->name('addAppointmentStore');

Route::get('/add-blog' , [AdminController::class,'addBlog'])->name('addBlog');
Route::get('/add-department' , [AdminController::class,'addDepartment'])->name('addDepartment');
Route::get('/add-doctor' , [AdminController::class,'addDoctor'])->name('addDoctor');
Route::post('/add-doctorStore' , [AdminController::class,'addDoctorStore'])->name('addDoctorStore');
Route::get('/add-patient' , [AdminController::class,'addPatient'])->name('addPatient');
Route::get('/add-schedule/{id}' , [AdminController::class,'addSchedule'])->name('addSchedule');
Route::post('/add-schedule/{id}' , [AdminController::class,'addScheduleUpload'])->name('addScheduleUpload');
Route::get('/add-scheduleInactive/{id}' , [AdminController::class,'addScheduleInactive'])->name('addScheduleInactive');
Route::get('/appointment' , [AdminController::class,'appointment'])->name('appointment');
Route::get('/blog' , [AdminController::class,'blog'])->name('blog');
Route::get('/blog-details' , [AdminController::class,'blogDetails'])->name('blogDetails');
Route::get('/chat' , [AdminController::class,'chat'])->name('chat');
Route::get('/departments' , [AdminController::class,'departments'])->name('departments');
Route::get('/doctors' , [AdminController::class,'doctors'])->name('doctors');
Route::get('/edit-blog' , [AdminController::class,'editBlog'])->name('editBlog');
Route::get('/edit-doctor' , [AdminController::class,'editDoctor'])->name('editDoctor');
Route::get('/edit-profile' , [AdminController::class,'editProfile'])->name('editProfile');
Route::get('/main' , [AdminController::class,'main'])->name('main');
Route::get('/patients' , [AdminController::class,'patients'])->name('patients');
Route::get('/schedule' , [AdminController::class,'schedule'])->name('schedule');

Route::get('/voice-call' , [AdminController::class,'voiceCall'])->name('voiceCall');
});



