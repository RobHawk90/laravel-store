<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest {
    
  public function authorize() {
    return true;
  }

  public function rules() {
    return [
      'name' => 'required|min:5',
      'description' => 'required|max:255',
      'price' => 'numeric|required',
      'quantity' => 'integer|required',
    ];
  }

}
