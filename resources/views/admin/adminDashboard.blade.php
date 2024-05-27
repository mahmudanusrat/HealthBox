@extends('admin.layout')

@section('adminBody')

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <span class="dash-widget-bg1"><i class="fa-solid fa-list"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>78782</h3>
                            <span class="widget-title1">Total Appointment <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <span class="dash-widget-bg2"><i class="fa-regular fa-user"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>1072</h3>
                            <span class="widget-title2">Total Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>102</h3>
                            <span class="widget-title1">Total Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="dash-widget">
                        <span class="dash-widget-bg1"><i class="fa-solid fa-spinner"></i></span>
                        <div class="dash-widget-info text-right">
                            <h3>82</h3>
                            <span class="widget-title1">Total Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 col-md-6 col-lg-8 col-xl-8 bg-primary" style="height: 25rem">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">Upcoming Appointments</h4> <a href="{{route('appointment')}}" class="btn btn-primary float-right">View all</a>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead class="d-none">
                                    <tr>
                                        <th>Patient Name</th>
                                        <th>Doctor Name</th>
                                        <th>Timing</th>
                                        <th class="text-right">Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                   @foreach($appointment as $data)
                                    <tr>
                                        <td style="min-width: 200px;">
                                            <a class="avatar" href="profile.html">B</a>
                                            <h2><a href="profile.html">{{$data->p_name}}<span>New York, USA</span></a></h2>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Appointment With</h5>
                                            <p>{{$data->d_name}}</p>
                                        </td>
                                        <td>
                                            <h5 class="time-title p-0">Timing</h5>
                                            <p>{{$data->date}}</p>
                                        </td>
                                        <td class="text-right">
                                            <a href="appointments.html" class="btn btn-outline-primary take-btn">Take up</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                    <div class="card member-panel">
                        <div class="card-header bg-white">
                            <h4 class="card-title mb-0">Doctors</h4>
                        </div>
                        <div class="card-body">
                            @foreach($doctor as $data1)
                                <ul class="contact-list">
                                    <li>
                                        <div class="contact-cont">
                                            <div class="float-left user-img m-r-10">
                                                <a href="profile.html" title="John Doe"><img src={{asset('doctor/images/profile/'.$data1->image)}} alt="" class="w-40 rounded-circle"><span class="status online"></span></a>
                                            </div>
                                            <div class="contact-info">
                                                <span class="contact-name text-ellipsis">{{$data1->d_name}}</span>
                                                <span class="contact-date">{{$data1->medical_degree}}</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            @endforeach

                        </div>
                        <div class="card-footer text-center bg-white">
                            <a href="{{route('doctors')}}" class="text-muted">View all Doctors</a>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="row">
                <div class="col-12 col-md-6 col-lg-8 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title d-inline-block">New Patients </h4> <a href="{{route('patients')}}" class="btn btn-primary float-right">View all</a>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table class="table mb-0 new-patient-table">
                                    <tbody>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="img/user.jpg" alt="">
                                            <h2>John Doe</h2>
                                        </td>
                                        <td>Johndoe21@gmail.com</td>
                                        <td>+1-202-555-0125</td>
                                        <td><button class="btn btn-primary btn-primary-one float-right">Fever</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="img/user.jpg" alt="">
                                            <h2>Richard</h2>
                                        </td>
                                        <td>Richard123@yahoo.com</td>
                                        <td>202-555-0127</td>
                                        <td><button class="btn btn-primary btn-primary-two float-right">Cancer</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="img/user.jpg" alt="">
                                            <h2>Villiam</h2>
                                        </td>
                                        <td>Richard123@yahoo.com</td>
                                        <td>+1-202-555-0106</td>
                                        <td><button class="btn btn-primary btn-primary-three float-right">Eye</button></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <img width="28" height="28" class="rounded-circle" src="img/user.jpg" alt="">
                                            <h2>Martin</h2>
                                        </td>
                                        <td>Richard123@yahoo.com</td>
                                        <td>776-2323 89562015</td>
                                        <td><button class="btn btn-primary btn-primary-four float-right">Fever</button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>--}}
        </div>
    </div>
    </div>
@endsection

