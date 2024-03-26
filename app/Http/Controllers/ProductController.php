<?php

namespace App\Http\Controllers;

use App\Models\Produkt;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /*
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Produkt::all();
        return view('admin.products.index', compact('products'));
    }

    /*
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /*
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'required|string|max:100' => 'name',
            'required|integer|max_digits:35' => 'price',
            'required' => 'unit',
            'required|integer|max_digits:30' => 'count',
            'required|mimes:png,jpg,jfif|max:3000' => 'image'
        ]);

        $product = new Produkt();

        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $product->image = $name;
            $request->file('image')->storeAs('public/post_image', $name);
        }

        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->count = $request->input('count');
        $product->unit = $request->input('unit');
        $product->description = $request->input('description');

        if ($product->save()) {
            return view('admin.products.show', ['product' => $product]);
        } else {
            return redirect()->route('admin.products.create');
        }
    }

    /*
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Produkt::find($id);
        if ($product != null) {
            return view('admin.products.show', ['product' => $product]);

        } else
            return redirect()->route('admin.products.index');
    }

    /*
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Produkt::find($id);
        if ($product != null) {
            return view('admin.products.edit', [
                'product' => $product
            ]);
        } else
            return redirect()->route('admin.products.index');
    }

    /*
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Produkt::find($id);
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->count = $request->input('count');
        $product->unit = $request->input('unit');
        $product->description = $request->input('description');

        if ($request->hasFile('image')) {
            $name = $request->file('image')->getClientOriginalName();
            $product->image = $name;
            $request->file('image')->storeAs('public/post_image', $name);
        }

        if ($product->save())
            return redirect()->route('admin.products.show', $product->id);
        else
            return redirect()->route('admin.products.edit', $product->id);
    }

    /*
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Produkt::find($id);
        if ($product != null) {
            $product->delete();
        }
        return redirect()->route('admin.products.index');
    }
}
