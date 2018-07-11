<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('material_sub_family_id')->unsigned();
          $table->string('name',128);
          // $table->string('slug',128)->unique();
          $table->string('units',128);
          $table->timestamps();

          //material_sub_family_id FK
          $table->foreign('material_sub_family_id')->references('id')->on('material_sub_families');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('materials');
    }
}
