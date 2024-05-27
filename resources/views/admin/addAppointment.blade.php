@extends('admin.layout')

@section('adminBody')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Appointment</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form action="{{route('addAppointmentStore')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Patient Name</label>
                                    <input type="text" class="form-control" id="datetimepicker3" name="p_name">

                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control" id="datetimepicker3" name="age">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Blood</label>
                                    <select class="select" name="bloodGroup">
                                        <option>Select</option>
                                        <option selected disabled>Select Blood</option>
                                        <option>A+</option>
                                        <option>A-</option>
                                        <option>B+</option>
                                        <option>B-</option>
                                        <option>AB+</option>
                                        <option>AB-</option>
                                        <option>O+</option>
                                        <option>O-</option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Doctor</label>
                                    <select class="select" name="doctor_id">
                                        <option value="1">Select</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Date</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="date">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Patient Email</label>
                                    <input class="form-control" type="email" name="email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Patient Phone Number</label>
                                    <input class="form-control" type="text" name="phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea cols="30" rows="4" class="form-control" name="message"></textarea>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Create Appointment</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
