@extends('doctor.layout')
@section('doctorBody')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Doctor Form
                    </div>
                    <div class="card-body">
                        <form action="{{route("editDoctorsUpload")}}" method="post" enctype="multipart/form-data">
                            @csrf

                                @foreach($dctr as $data)


                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="pp">Profile Picture : </label> &emsp;
                                        <img src="doctor/images/profile/{{$data->image}}" width="100" class="rounded-circle" alt="Upload Image">
                                    </div>
                                    <div>
                                        <input type="file" name="image">
                                    </div>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="name">Doctor's Name</label>
                                <input type="text" class="form-control" id="name" name="d_name" value="{{$data->name}}">
                            </div>
                            <div class="form-group">
                                <label for="specialty">Specialty</label>
                                <input type="text" class="form-control" id="specialty" name="speciality" value="{{$data->speciality}}">
                            </div>
                            <div class="form-group">
                                <label for="hospital">Hospital & Degree</label>
                                <input type="text" class="form-control" id="hospital" name="medical_degree" value="{{$data->medical_degree}}">
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact Number</label>
                                <input type="tel" class="form-control" id="contact" name="phone" value="{{$data->phone}}">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control"  name="description" >{{$data->description}}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                                @endforeach

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
