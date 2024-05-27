@extends('layouts.base')
@section('body')
<!-- Start Appointment -->
<section class="appointment">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                    <img src={{asset("assets/img/section-img.png")}} alt="#">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12 col-12">

                <form class="form text-black" action="{{route('appointment-data')}}" method="post">
                    @csrf

                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="phone" type="text" placeholder="Phone">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input name="age" type="text" placeholder="age">
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div tabindex="0">
                                    <select class="list nice-select form-control wide text-primary" name="bloodGroup">
                                      <option selected disabled>Select Blood</option>
                                      <option>A+</option>
                                      <option>A-</option>
                                      <option>B+</option>
                                      <option>B-</option>
                                      <option>AB+</option>
                                      <option>AB-</option>
                                      <option>O+</option>
                                      <option>O-</option>
                                    </select>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <div tabindex="0">
                                    <select class="list nice-select form-control wide text-primary" name="doctor">
                                            <option selected disabled>Select Doctor</option>
                                        @foreach($dctr as $data)
                                        <option value="{{$data->id}}">{{$data->d_name}}---{{$data->speciality}}</option>

                                    @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="form-group">
                                <input type="date" placeholder="Date" id="datepicker" name="date">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-12">
                            <div class="form-group">
                                <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-5 col-md-4 col-12">
                            <div class="form-group">
                                <div class="button">
                                    <button type="submit" class="btn">Book An Appointment</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
            <div class="col-lg-6 col-md-12 ">
                <div class="appointment-image">
                    <img src="assets/img/contact-img.png" alt="#">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Appointment -->
@endsection
