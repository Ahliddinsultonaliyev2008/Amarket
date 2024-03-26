@extends('layouts.admin')

@section('content')

    <div class="container my-5 d-flex justify-content-center">
        <div class="card border-0 w-75 shadow-lg p-3">
            <div class="row">
                <div class="col">
                    <h1 class="fw-medium me-5 text-success"> Update product</h1>
                </div>
                <div class="col d-flex justify-content-end">
                    <a class="btn btn-dark mb-3 mt-2" href="{{ route('admin.products.show', $product->id) }}"> Back </a>
                </div>
            </div>
            <form action="{{route('admin.products.update', $product->id)}}" method="post">
                @method('PUT')
                @csrf
                <label class="mt-3 fw-medium" for="name"> Name </label>
                <input value="{{$product-> name}}" class="form-control mt-2" type="text" name="name" id="name">

                <label class="mt-3 fw-medium" for="price"> Price </label>
                <input value="{{$product->price}}" class="form-control mt-2" type="number" name="price" id="price">

                <label class="mt-3 fw-medium" for="count"> Count </label>
                <input value="{{$product->count}}" class="form-control mt-2" type="text" name="count" id="count">

                <label class="mt-3 fw-medium" for="unit"> Unit </label>
                <select class="form-select mt-2" name="unit" id="unit">
                    <option {{($product->unit === 'kg') ?  'selected' : ''}} value="kg">kg</option>
                    <option {{($product->unit === 'sm') ?  'selected' : ''}} value="sm">sm</option>
                    <option {{($product->unit === 'litr') ?  'selected' : ''}} value="litr">litr</option>
                    <option {{($product->unit === 'dona') ?  'selected' : ''}} value="dona">dona</option>
                </select>

                <label class="mt-3 fw-medium" for="image"> Image </label>
                <input value="{{$product->image}}" class="form-control mt-2" type="file" name="image" id="image">

                <label class="mt-3 fw-medium" for="description"> Description </label>
                <textarea style="resize: none" class="form-control mt-2" name="description" id="description" cols="30" rows="5">{{$product->description}}</textarea>
                <div class="w-100 d-flex justify-content-center">
                    <button class="btn btn-success mt-2 w-25" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
