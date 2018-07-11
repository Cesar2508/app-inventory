<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skus', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('material_id')->unsigned();
          $table->integer('serial_id');
          $table->timestamps();

          //material_sub_family_id FK
          $table->foreign('material_id')->references('id')->on('materials');
          // $table->foreign('serie_id')->references('id')->on('material_serials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skus');
    }
}
