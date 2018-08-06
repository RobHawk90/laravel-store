<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProductSize extends Migration {

  public function up() {
    Schema::table('products', function($table) {
      $table->string('size', 100);
    });
  }

  public function down() {
    Schema::table('products', function($table) {
      $table->dropColumn('size');
    });
  }

}
