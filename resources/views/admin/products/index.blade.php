@extends('layouts.admin')

@section('content')

    <div class="container my-5">
        <div class="card border-0 shadow-lg p-3">
            <div class="row">
                <div class="col">
                    <h1 class="fw-medium me-5 text-success">Products</h1>
                </div>
                <div class="col d-flex justify-content-end">
                    <a class="btn btn-success mb-3 mt-2" href="{{ route('admin.products.create') }}">Add new
                        product </a>
                </div>
            </div>


            <table class="table mt-3">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Count</th>
                    <th scope="col">Unit</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <th scope="row">{{$product->id}}</th>
                        <td>{{$product->name}}</td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->count}}</td>
                        <td>{{$product->unit}}</td>
                        <td style="width: 200px">
                            <div class="row">
                                <div class="col">
                                    <a href="{{route('admin.products.show', $product->id)}}">

                                        <i class="bi bi-eye text-dark"></i>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{route('admin.products.edit',$product->id) }}">

                                        <i class="bi bi-pen text-primary"></i>

                                    </a>
                                </div>
                                <div class="col">
                                    <form action="{{route('admin.products.destroy', $product-> id )}}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        <button style="background-color: #ffffff;border: none"
                                                type="submit" class="bi bi-trash3 text-danger"></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
