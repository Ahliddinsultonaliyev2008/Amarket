<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/bootstrap/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/amarket.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/add.css')}}">
</head>
<body>

<div class="list-unstyled">
    <div class="list-group-item">
        <div class="topbar shadow-lg bg-white d-flex align-items-center">
            <div class="row w-100 mx-0">
                <div class="col fs-1 text-success fw-medium">
                    <a href="{{route('home')}}">
                        {{config('app.name')}}
                    </a>
                </div>
                <div class="col d-flex align-items-center d-flex justify-content-end">
                    <div class="row fs-5 fw-medium w-75">
                        <div class="col-2">
                            <a class="{{request()->is('/*') ? 'active' : ''}}"
                               href="{{route('home')}}">Home</a>
                        </div>
                        <div class="col-2">
                            <a class="{{request()->is('about') ? 'active' : ''}}"
                               href="{{route('about')}}">About</a>
                        </div>
                        <div class="col-2">
                            <a class="{{request()->is('products') ? 'active' : ''}}"
                                href="{{route('product.index')}}">Products</a>
                        </div>
                        <div class="col-6">
                            <a class="btn btn-danger px-4 mx-2" href="{{ route('cart') }}">
                                Cart({{(!isset($TotalQuantity) ? 0 : $TotalQuantity)}})
                            </a>
                            <a class="btn btn-primary px-4 mx-2" href="{{ route('auth.store') }}">
                                Login
                            </a>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="list-group-item">
        @yield('content')
    </div>
</div>


<script src="{{asset('static/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('static/js/amarket.js')}}"></script>
</body>
</html>
