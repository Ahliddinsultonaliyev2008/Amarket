<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produkt;
use Illuminate\Http\Request;
use Psy\Util\Str;

class CartController extends Controller
{
    public function cart(Request $request)
    {
        $carts = Cart::where('uuid', $request->cookie('user'))->get()->all();
        $data = [];
        $totalPrise = 0;
        $TotalQuantity = 0;
        foreach ($carts as $cart) {

            $product = Produkt::where('id', $cart->product_id)->select(['name', 'price', 'image'])->first();

            $data[] = [
                'products' => [
                    'name' => $product->name,
                    'image' => $product->image,
                    'price' => $product->price,
                ],
                'quantity' => $cart->quantity,
                'total' => $cart->quantity * $product->price
            ];

            $totalPrise += $cart->quantity * $product->price;
            $TotalQuantity += $cart->quantity;
        }

        return view('cart.index', [
            'data' => $data,
            'totalPrice' => $totalPrise,
            'TotalQuantity' => $TotalQuantity,
        ]);
    }

    public function addProduct(Request $request, Produkt $product)
    {
        $uuid = $request->cookie('user');
        if (isset($uuid)) {

            $cart = Cart::where('uuid', $uuid)->where('product_id', $product->id)->first();


            if (is_null($cart)) {
                Cart::create([
                    'product_id' => $product->id,
                    'quantity' => 1,
                    'uuid' => $uuid
                ]);
            } else {
                $cart->quantity = $cart->quantity + 1;
                $cart->save();
            }


            return redirect()->route('product.index');

        } else {
            $cookie = cookie('user', \Illuminate\Support\Str::random(), 60);

            $cart = Cart::create([
                'product_id' => $product->id,
                'quantity' => 1,
                'uuid' => $cookie->getValue()
            ]);
            return redirect()->route('product.index')->withCookie($cookie);
        }
    }

    public function removeProduct(Request $request, Produkt $product)
    {
        $uuid = $request->cookie('user');
        if (isset($uuid)) {

            $cart = Cart::where('uuid', $uuid)->where('product_id', $product->id)->first();

            if (!is_null($cart)) {
                $cart->quantity = $cart->quantity - 1;
                $cart ->save();

                if ($cart->quantity < 1)
                    $cart ->delete();

            }
            return redirect()->route('product.index');
        }
    }
}

