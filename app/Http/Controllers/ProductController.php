<?php namespace App\Http\Controllers;

use DB;
use Request;

use App\Product;

class ProductController extends Controller {

  public function list() {
    return view('product/list')->with('products', Product::all());
  }

  public function detail($id) {
    return view('product/detail')->with('product', Product::find($id));
  }

  public function form() {
    return view('product/form');
  }

  public function save() {
    Product::create(Request::all());
    return redirect()
            ->action('ProductController@list')
            ->withInput(Request::only('name'));
  }

  public function remove($id) {
    $product = Product::find($id);
    $product->delete();
    return redirect()->action('ProductController@list');
  }

}
