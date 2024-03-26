<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{asset('static/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/bootstrap/font/bootstrap-icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('static/css/amarket.css')}}">
</head>
<body>

<div class="list-unstyled">
    <div class="list-group-item">
        <div class="topbar shadow-lg bg-white d-flex align-items-center">
            <div class="row w-100 mx-0">
                <div class="col fs-1 text-success fw-medium">
                    <a href="{{route('home')}}">
                        {{config('app.name')}} <span class="fs-5">admin</span>
                    </a>
                </div>
                <div class="col d-flex align-items-center d-flex justify-content-end">
                    <div class="row fs-5 fw-medium w-75">
                        <div class="col-3 text-center">
                            <a class="{{request()->is('/*') ? 'active' : ''}}"
                               href="{{route('admin.dashboard.index')}}">Dashboard</a>
                        </div>
                        <div class="col-3 text-center">
                            <a class="{{request()->is('about') ? 'active' : ''}}"
                               href="{{route('admin.orders.index')}}">Orders</a>
                        </div>
                        <div class="col-3">
                            <a class="{{request()->is('products') ? 'active' : ''}}"
                               href="{{route('admin.products.index')}}">Products</a>
                        </div>
                        <div class="col-3">
                            <form action="{{route('auth.logout')}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-dark px-4 mx-2">
                                    Logout
                                </button>
                            </form>
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
