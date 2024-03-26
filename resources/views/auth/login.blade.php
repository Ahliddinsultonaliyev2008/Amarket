@extends('layouts.auth')

@section('content')

    <div class="d-flex justify-content-center align-items-center vw-100 vh-100">
        <div class="card border-0 shadow-lg p-3 w-25">
            <span class="fs-1 fw-medium text-center text-primary">LOGIN</span>
            <form action="{{route('auth.store')}}" method="post">
                @csrf
                <input name="phone" class="form-control mt-3" type="text" placeholder="Enter your phone">
                <input name="password" class="form-control mt-3" type="password" placeholder="Enter your password">
                <button type="submit" class="btn btn-primary mt-3">GO</button>
                <a href="{{route('home')}}" class="btn btn-danger mt-3">Back</a>
            </form>
        </div>
    </div>

@endsection
