@extends('layouts.base')
@section('body')
    <div class="container mt-4">
        <h2>My Report & Medicine</h2>
        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Doctor</th>
                    <th>Medicine</th>
                    <th>Report</th>
                    <th>About Me</th>
                    <th>Appointment date</th>
                    <th>Serial Id</th>
                </tr>
                </thead>
                @if(!$report)
                @else

                    @foreach($report as $data)
                        <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$data->d_name}}</td>
                            <td>{{$data->medicine}}</td>
                            <td>{{$data->report}}</td>
                            <td>{{$data->aboutPatient}}</td>
                            <td>{{$data->date}}</td>
                            <td>{{$data->serial_id}}</td>
                            {{--
                            <td>{{$data->room}}</td>
                            --}}
                        </tr>
                        </tbody>

                    @endforeach
                @endif
            </table>
        </div>
    </div>
@endsection

