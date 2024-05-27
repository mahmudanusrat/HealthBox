@extends('layouts.base')
@section('body')
    <section>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <h2 class="mb-4">BMI Calculator</h2>
                    <form id="bmiForm" action={{url('/bmis')}} method="post">
                       @csrf
                        <div class="form-group">
                            <label for="weight">Weight (kg):</label>
                            <input type="number" class="form-control" id="weight" name="weight" required>
                        </div>
                        <div class="form-group">
                            <label for="height">Height (feet):</label>
                            <input type="number" class="form-control" id="height" name="height" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Calculate BMI</button>
                    </form>
                    @if(session('bmi'))
                        <div id="result" class="mt-4">
                            <p>Your BMI is :  {{ session('bmi') }}</p>
                        </div>
                    @endif
                    @if(session('output'))
                        <div id="result" class="mt-4">
                            <p>Your are :  {{ session('output') }}</p>
                        </div>
                    @endif


                </div>
            </div>

        </div>
    </section>
@endsection
