@extends('doctor.layout')

@section('doctorBody')
<div class="container-fluid mt-5">
        <div class="row d-flex justify-content-center">

            <div class="col-md-7" style="width: 56rem">

                <div class="card p-3 py-4">

                        @foreach($dctr as $data)

                                <div class="text-center">
                                    <img src="doctor/images/profile/{{$data->image}}" width="100" class="rounded-circle" alt="Upload Image">
                                </div>

                                <div class="text-center mt-3">
                                    <span class="bg-secondary p-1 px-4 rounded text-white">Doctor</span>
                                    <h5 class="mt-2 mb-0">{{$data->name}}</h5>
                                    <span>{{$data->speciality}}Specialist</span>

                                    <div class="px-4 mt-1">
                                        <p class="fonts">{{$data->description}}</p>

                                    </div>
                        @endforeach


                                <div class="buttons">
                                    <a href="{{route('editDoctors')}}"><button class="btn btn-outline-primary px-4 " >Edit Profile</button></a>
                                    <a href="{{route('allDoctors')}}"><button class="btn btn-primary px-4 ms-3">See All Doctor</button></a>
                                </div>
                            </div>



                </div>
            </div>
        </div>
</div>
@endsection
