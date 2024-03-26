@extends('layouts.basic')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="card mt-5 border-0" style="width: 35rem; height: 25rem; background-color: #f8f4f4;">
                <div class="card-body">
                    <h1 class="card-title fw-medium">Online shopping simplified</h1>
                    <br>
                    <p class="card-text me-5 fw-medium">Order your groceries from <i>SuperM</i>  with our easy to use app, and get your products delivered straight to your doorstep.</p>
                    <br>
                    <a href="#" class="btn btn-success p-2 w-25">Start Shopping</a>
                </div>
            </div>
            <div class="col d-flex mt-3 ms-5 justify-content-end">
                <img class="rounded-5 w-75 h-75 mt-5 me-5 " src="{{asset('static/img./home.jpg')}}" alt="">
            </div>
        </div>
    </div>
@endsection









