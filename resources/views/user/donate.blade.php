@extends('layouts.base')
@section('body')
    <div class="container">
        <p class=" h1 text-center mt-5">Blood Doner Form</p>
        <form class="mt-5" action="{{url('form_req')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="fullname" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="fullname" name="name" required>
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="number" required>
            </div>
            <div class="mb-3">
                <label for="bloodGroup" class="form-label">Blood Group</label>
                <select class="form-select" id="bloodGroup" name="group" required>
                    <option value="">Choose...</option>
                    <option value="A+">A positive</option>
                    <option value="A-">A negative</option>
                    <option value="B+">B positive</option>
                    <option value="B-">B negative</option>
                    <option value="AB+">AB positive</option>
                    <option value="AB-">AB negative</option>
                    <option value="O+">O positive</option>
                    <option value="O-">O negative</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input class="form-control" id="address" rows="3" name="address" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Message</label>
                <input class="form-control" id="address" rows="3" name="message" required>
            </div>
            <button type="submit" class="m-1 btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
@endsection
