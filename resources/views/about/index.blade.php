@extends('layouts.basic')

@section('content')

    <div class="container">
        <div class="row mt-3">
            <div class="card mt-5 border-0" style="width: 50rem; height: 25rem; background-color: #f8f4f4;">
                <div class="card-body">
                    <h1 class="card-title fw-medium">About Us</h1>
                    <br>
                    <p class="card-text me-5 fw-medium">We started operations in 2020. We guarantee fresh produce.
                        Save time by shopping on our app and we'll deliver the products right to your home.
                        <i>We use Stripe to process your payment.</i></p>
                    <br>
                </div>
            </div>
            <div class="col d-flex mt-3 ms-5 justify-content-end">
                <img class="rounded-5 w-75 h-75 mt-5 me-5 " src="{{asset('static/img./about.jpg')}}" alt="">
            </div>
        </div>
    </div>

@endsection
