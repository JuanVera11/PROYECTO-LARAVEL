<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index')->with(['products' => $products]);
    }

    public function create()
    {
        //
    }

    public function store(ProductRequest $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->available = $request->has('available');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = uniqid('product_') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $fileName);
            $product->photo = $fileName;
        }

        if ($product->save()) {
            return redirect('products')->with('messages', 'El producto: ' . $product->name . ' ¡Fue creado!');
        }
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
        return ['product' => $product];
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->available = $request->has('available');

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $fileName = uniqid('product_') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img'), $fileName);
            $product->photo = $fileName;
        }

        if ($product->save()) {
            return redirect('products')->with('messages', 'El producto: ' . $product->name . ' ¡Fue actualizado!');
        }
    }

    public function destroy(Product $product)
    {
        if ($product->photo && File::exists(public_path('img/' . $product->photo))) {
            File::delete(public_path('img/' . $product->photo));
        }

        if ($product->delete()) {
            return redirect('products')->with('messages', 'El producto: ' . $product->name . ' ¡Fue eliminado!');
        }
    }
      public function search(Request $request){
        
        $products = Product::names($request->q)->paginate(100);
        return view('products.search')->with(['products' => $products]);
    }
}
