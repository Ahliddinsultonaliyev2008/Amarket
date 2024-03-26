@extends('layouts.admin')

@section('content')

    <div class="container mt-3">
        <h1 class="fw-medium">Dashboard</h1>
        <div class="row">
            <div class="col-3 p-3">
                <div class="card border-0 shadow-lg p-3 fs-3 rounded-4 ">
                    <i class="bi bi-box2"></i>
                    <h3>Products</h3>
                    <h6>200</h6>
                </div>
            </div>
            <div class="col-3 p-3">
                <div class="card border-0 shadow-lg p-3 fs-3 rounded-4">
                    <i class="bi bi-cart4"></i>
                    <h3>Orders</h3>
                    <h6>24</h6>
                </div>
            </div>
            <div class="col-3 p-3">
                <div class="card border-0 shadow-lg p-3 fs-3 rounded-4">
                    <i class="bi bi-person"></i>
                    <h3>Users</h3>
                    <h6>53</h6>
                </div>
            </div>
            <div class="col-3 p-3">
                <div class="card border-0 shadow-lg p-3 fs-3 rounded-4">
                    <i class="bi bi-box2"></i>
                    <h3>available</h3>
                    <h6>176</h6>
                </div>
            </div>
        </div>
    </div>
@endsection
