<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreasTable extends Migration {
  public function up() {
    Schema::create('areas', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->Integer('city')->nullable(true);
      $table->string('area')->nullable(true);
      $table->timestamps();
      $table->softDeletes();
    });
  }
  public function down() {
    Schema::dropIfExists('areas');
  }
}
