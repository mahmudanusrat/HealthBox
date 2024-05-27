@extends('layouts.base')
@section('body')
    <div class="container-fluid">
        <div style="background-color: silver">
            <p class="h1 text-center">Blood Bank</p>
            <p class="h1 text-center"><a class="link-danger" href="{{'donate_blood'}}">Become A Doner</a></p>
        </div >

        <div class="d-flex align-items-center justify-content-center">
            <form action="{{url('search_blood')}}">
                @csrf
                <label class=" h4 text-red-600">Search Blood : &nbsp; </label>
                <select name="search">
                    <option disabled selected>Select your Blood Group</option>
                    <option value="A+">A positive</option>
                    <option value="A-">A negative</option>
                    <option value="B+">B positive</option>
                    <option value="B-">B negative</option>
                    <option value="AB+">AB positive</option>
                    <option value="AB-">AB negative</option>
                    <option value="O+">O positive</option>
                    <option value="O-">O negative</option>
                </select>

                <button  style="background-color: #00D9A5;padding: 8px;border-radius: 8px;" type="submit" >Submit Request</button>
            </form>
        </div>

        <div class="table-responsive mt-4">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Blood Group</th>
                    <th>Phone Number</th>
                    <th>Message From Doner</th>
                </tr>
                </thead>
                @if(!$data)
                    <h1>No data</h1>
                @else

                    @foreach($data as $doner)
                        <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{$doner->name}}</td>
                            <td>{{$doner->bloodGroup}}</td>
                            <td>{{$doner->number}}</td>
                            <td>{{$doner->message}}</td>
                        </tr>
                        </tbody>

                    @endforeach
                @endif
            </table>
        </div>


    </div>
@endsection
