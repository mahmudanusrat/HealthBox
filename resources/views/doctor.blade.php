@extends('layouts.base')
@section('body')
    <!-- Slider Area -->

        {{--<section class="slider container d-flex justify-content-center">
            <div id="carouselExampleIndicators" class=" carousel slide" data-ride="carousel" style="width: 18rem">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="assets/img/doctor.jpeg" alt="First slide" style="width: 100%">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>My DSoctor</h5>
                            <p>hnlkjsfdhfkjsd</p>
                        </div>
                    </div>

                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon bg-primary" style="width: 2rem" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon bg-primary" style="width: 2rem" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <!--/ End Slider Area -->
        </section>--}}
<div class="container">
    <div class="h1 m-2">All Doctors</div>
   <div class="card-deck m-3">
        @foreach($dctr as $data)
        <div class="card">
            <img class="card-img-top" src="doctor/images/profile/{{$data->image}}" style="height: 18rem" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">{{$data->d_name}}</h5>
                <p class="card-text">{{$data->speciality}}</p>
                <p class="card-text">{{$data->medical_degree}}</p>
            </div>
        </div>
        @endforeach

    </div>
    {{--<div class="row">
        <div class="col-md-4 col-sm-4  col-lg-3">
            @foreach($dctr as $data)
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a class="avatar" href="profile.html"><img alt="" src={{asset('doctor/images/profile/'.$data->image)}} ></a>
                    </div>

                    <h4 class="doctor-name text-ellipsis"><a href="profile.html">{{$data->d_name}}</a></h4>
                    <div class="doc-prof">{{$data->speciality}}</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> {{$data->medical_degree}}
                    </div>
                </div>
            @endforeach

        </div>
    </div>--}}


</div>

@endsection
