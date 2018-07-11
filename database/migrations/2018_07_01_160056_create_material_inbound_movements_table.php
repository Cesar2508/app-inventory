<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialInboundMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_inbound_movements', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('adquisition_id')->unsigned()->nullable();
          $table->string('status',128)->nullable();
          $table->string('type',128)->nullable();
          $table->timestamps();

          //adquisition_id FK
          // $table->foreign('material_family_id')->references('id')->on('material_families');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_inbound_movements');
    }
}
