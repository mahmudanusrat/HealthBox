@extends('doctor.layout')
@section('doctorBody')
<div class="container-fluid">
    <form>
        @csrf
            <input class="form-control form-control-lg" type="text" placeholder="Search Patient">
            <button class="btn btn-outline-primary m-3">Search Patient</button>
    </form>

        <h2>My Patient Information</h2>
        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                </tr>
                </thead>
                @if(!$patient)
                @else

                    @foreach($patient as $data)
                        <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$data->p_name}}</td>
                            <td>{{$data->email}}</td>
                            <td>{{$data->phone}}</td>
                        </tr>
                        </tbody>

                    @endforeach
                @endif
            </table>
        </div>
    </div>

@endsection
