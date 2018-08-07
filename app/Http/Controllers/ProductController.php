<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Product;
use Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['save', 'remove', 'form']]);
    }

    function list() {
        return view('product/list')->with('products', Product::all());
    }

    public function detail($id)
    {
        return view('product/detail')->with('product', Product::find($id));
    }

    public function form()
    {
        return view('product/form');
    }

    public function save(ProductRequest $request)
    {
        Product::create($request->all());
        return redirect()
            ->action('ProductController@list')
            ->withInput(Request::only('name'));
    }

    public function remove($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->action('ProductController@list');
    }
}
