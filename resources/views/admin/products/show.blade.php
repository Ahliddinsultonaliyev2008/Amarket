@extends('layouts.admin')

@section('content')

    <div class="container py-5">
        <div class="card shadow-lg border-0 p-3">
            <div class="row fs-3 fw-medium">
                <div class="col-3 d-flex justify-content-center align-items-center">
                    <img src="{{asset('storage/public/post_image/'.$product->image)}}" alt="">
                </div>
                <div class="col-6 fs-3 fw-medium">
                    <div class="row flex-column">
                        <div class="col fs-1 fw-bold">
                            {{$product->name}}
                        </div>
                        <div class="col text-danger">
                            {{$product->price}} so`m
                        </div>
                        <div class="col">
                            {{$product->count}}  {{$product->unit}}
                        </div>
                        <div class="col">
                            {{$product->image}}
                        </div>
                        <div class="col mt-3 fs-5">
                            created_at: {{$product->created_at}}
                        </div>
                        <div class="col fs-5">
                            updated_at: {{$product->updated_at}}
                        </div>
                    </div>
                </div>
                <div class="col-3 d-flex justify-content-end align-items-start ">
                    <a class="btn btn-success mx-2" href="{{route('admin.products.edit',$product->id) }}">Edit</a>

                    <form action="{{route('admin.products.destroy', $product->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger mx-2 mb-4" href="">Delete</button>
                    </form>

                    <a class="btn btn-dark mx-2" href="{{route('admin.products.index') }}">Back</a>
                </div>
            </div>
            <div class="my-3 fs-3 fw-medium mt-5">
                {{$product-> description}}
            </div>
        </div>
    </div>

@endsection
