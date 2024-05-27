@extends('doctor.layout')
@section('doctorBody')
    <div class="container-fluid">
        <h2>Today's Schedule</h2>
        <h2>Room : </h2>
        &nbsp;
        <h3>Patient Lists : </h3>
        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Appointment Time</th>

                    <th>Details & Prescription</th>

                </tr>
                </thead>
                @foreach($patient as $data)
                    <tbody>
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{$data->p_name}}</td>
                        <td>{{$data->date}}</td>

                        <td><a href="{{url('/report-details',['id'=>$data->id])}}" class="btn bg-primary">Details & Write Prescription</a></td>
                    </tr>
                    </tbody>

                @endforeach
            </table>
        </div>
    </div>
@endsection
