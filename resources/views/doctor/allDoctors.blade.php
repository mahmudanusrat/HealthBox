@extends('doctor.layout')
@section('doctorBody')
    <div class="container-fluid">
            <h2>All Doctors</h2>
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Speciality</th>
                    <th>Medical</th>
                </tr>
                </thead>
                <tbody>
                @foreach($dctr as $data)
                <tr>
                    <th>{{$loop->iteration}}</th>
                    <td>{{$data->d_name}}</td>
                    <td>{{$data->speciality}}</td>
                    <td>{{$data->medical_degree}}</td>
                </tr>
                @endforeach

                <!-- Add more rows as needed -->
                </tbody>
            </table>

    </div>


@endsection
