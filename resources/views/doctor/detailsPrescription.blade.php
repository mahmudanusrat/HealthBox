@extends('doctor.layout')
@section('doctorBody')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            @foreach($patient as $data)
            <aside>
              <h5>Name : {{$data->p_name}}</h5>
                &nbsp;
                <h5>phone : {{$data->phone}}</h5>
            </aside>
        </div>
        <div class="col-sm-3">
            <aside>
                <h5>Blood Group : {{$data->bloodGroup}}</h5> &nbsp;
                <h5>Email : {{$data->email}}</h5>
            </aside>
        </div>
        <div class="col-sm-3">
            <aside>
                <h5>Age : {{$data->age}}</h5> &nbsp;
            </aside>
        </div>
        <div class="col-3">
            <div class="text-center">
                <img src={{asset("doctor/assets/images/profile/dctr.jpeg")}} width="100" class="rounded-circle">
            </div>
        </div>
    </div>
    <div class="h1">Medicine & Plan</div>
    <form action="{{route('prescriptionUpload',['id'=>$data->id])}}" method="post">
        @endforeach
        @csrf
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control bg-white" id="exampleFormControlTextarea1" rows="10" placeholder="Write Medicine" name="medicine"></textarea>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control bg-white" id="exampleFormControlTextarea1" rows="10" placeholder="About Patient" name="aboutPatient"></textarea>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control bg-white" id="exampleFormControlTextarea1" rows=5 placeholder="Report" name="report"></textarea>
                </div>
            </div>
        </div>
        <button type="submit" style="  background-color: #04AA6D; /* Green */
              border: none;
              color: white;
              padding: 16px 32px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
              margin: 4px 2px;">
            Prescribe
        </button>
    </form>

</div>

@endsection
