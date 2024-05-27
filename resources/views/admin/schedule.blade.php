@extends('admin.layout')

@section('adminBody')

    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Schedule</h4>
                </div>
               {{-- <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{route('addSchedule')}}" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Schedule</a>
                </div>--}}
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-border table-striped custom-table mb-0">
                            <thead>
                            <tr>
                                <th>Doctor Name</th>
                                <th>Department</th>
                                <th>Available Days</th>
                                <th>Available Time</th>
                                <th>Status</th>
                                <th class="text-right">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($doctor as $data)
                            <tr>
                                <td><img width="28" height="28" src={{asset('doctor/images/profile/'.$data->image)}} class="rounded-circle" alt="">{{$data->d_name}}</td>
                                <td>{{$data->speciality}}</td>
                                <td>{{$data->working_days}}</td>
                                <td>{{$data->time}}</td>
                                <td><span class="custom-badge status-green">{{$data->status}}</span></td>
                                <td class="text-right">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{route('addScheduleUpload',['id'=>$data->id])}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            @if($data->status === 'Active')
                                            <a class="dropdown-item" href="{{route('addScheduleInactive',['id'=>$data->id])}}"><i class="fa-solid fa-xmark"></i> Inactive</a>
                                            @else
                                                <a class="dropdown-item" href="{{route('addScheduleInactive',['id'=>$data->id])}}"><i class="fa-solid fa-check"></i> Active</a>
                                            @endif
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
