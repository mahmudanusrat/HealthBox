@extends('admin.layout')

@section('adminBody')

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Schedule</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                            @foreach($doctor as $data)
                    <form action="{{route('addScheduleUpload',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Doctor Name</label>
                                    <input type="text" class="form-control" value="{{$data->d_name}}" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Available Days</label>
                                    <select class="select" name="working_days" multiple>
                                        <option disabled>Select Days</option>
                                        <option>Sunday</option>
                                        <option>Monday</option>
                                        <option>Tuesday</option>
                                        <option>Wednesday</option>
                                        <option>Thursday</option>
                                        <option>Friday</option>
                                        <option>Saturday</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Time</label>
                                    <div class="time-icon">
                                        <input type="text" class="form-control" id="datetimepicker3" name="time" value="{{$data->time}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea cols="30" rows="4" class="form-control" name="message">{{$data->message}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="display-block">Schedule Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="product_active" value="Active" checked>
                                <label class="form-check-label" for="product_active">
                                    Active
                                </label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="product_inactive" value="Inactive">
                                <label class="form-check-label" for="product_inactive">
                                    Inactive
                                </label>
                            </div>
                        </div>
                        <div class="m-t-20 text-center">
                            <button class="btn btn-primary submit-btn">Create Schedule</button>
                        </div>
                    </form>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
