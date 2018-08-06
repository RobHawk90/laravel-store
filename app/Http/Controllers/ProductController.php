<?php namespace App\Http\Controllers;

use DB;
use Request;

class ProductController extends Controller {

  public function list() {
    $products = DB::select('select * from products');
    return view('product/list')->with('products', $products);
  }

  public function detail() {
    $id = Request::route('id');
    $products = DB::select('select * from products where id = ?', [$id]);
    return view('product/detail')->with('product', $products[0]);
  }

  public function form() {
    return view('product/form');
  }

  public function save() {
    $name = Request::input('name');
    $description = Request::input('description');
    $price = Request::input('price');
    $quantity = Request::input('quantity');

    DB::insert(
      'insert into products (name, description, price, quantity) values(?, ?, ?, ?)',
      [$name, $description, $price, $quantity]
    );

    return redirect()
            ->action('ProductController@list')
            ->withInput(Request::only('name'));
  }

}
