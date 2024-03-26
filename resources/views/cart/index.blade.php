@extends('layouts.basic')

@section('content')

    <div class="container">
        <div class="mt-5">
            <h1>Your Cart</h1>
            <table class="table1 table-cart mt-5">
                @if($TotalQuantity > 0)
                    <thead>
                    <tr>
                        <th width="25%" class="th-product">Product</th>
                        <th width="20%">price</th>
                        <th width="10%">Quantity</th>
                        <th width="25%">Total</th>
                    </tr>
                    </thead>
                @endif
                @foreach($data as $item)
                    <tbody>
                    <tr>
                        <td>
                            <img src="{{asset('storage/public/post_image/'. $item ['products']['image'])}}" width="40" class="mx-3 rounded-3 p-1  " alt="ry">
                            {{$item['products']['name']}}
                        </td>
                        <td>{{$item['products']['price']}}</td>
                        <td>{{$item['quantity']}}</td>
                        <td><strong>{{$item['total']}}</strong></td>
                    </tr>

                    </tbody>
                @endforeach
                @if($TotalQuantity > 0)
                    <tfoot>
                    <tr>
                        <th colspan="2"></th>
                        <th class="cart-highlight">Total</th>
                        <th class="cart-highlight">{{ $totalPrice  }}</th>
                    </tr>
                    </tfoot>
                @endif
            </table>
        </div>
    </div>
    <div class="container py-4 py-md-5 px-4 px-md-3">
        <div class="row d-flex mt-5 w-25 ms-4">
            <div class="col">
                <a href="https://www.paynet.uz/">
                    <img width="70" src="{{asset('static/img/1094865.jpg')}}" alt="">
                </a>
            </div>
            <div class="col">
                <a href="https://payme.uz/home/main">
                    <img width="50" src="{{asset('static/img/1590081.jpg')}}" alt="">
                </a>
            </div>
            <div class="col">
                <a href="https://www.paypal.com/paypalme/">
                    <img width="70" src="{{asset('static/img/png-transparent-paypal-logo-text-line-blue-thumbnail.png')}}" alt="">
                </a>
            </div>
        </div>
    </div>
@endsection
