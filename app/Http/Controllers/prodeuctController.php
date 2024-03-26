<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produkt;
use Illuminate\Http\Request;

class prodeuctController extends Controller
{
    function index(Request $request)
    {

        $products = Produkt::all();
        /** @var  Cart $carts */
        $carts = Cart::where('uuid', $request->cookie('user'))->get()->all();
        $TotalQuantity = 0;
        foreach ($carts as $cart) {
            $TotalQuantity += $cart->quantity;
        }

        return view('product.index',[
            'products' => $products,
            'carts' => $carts,
            'TotalQuantity' => $TotalQuantity
        ]);
    }
}
