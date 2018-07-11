<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialOutboundMovementDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_outbound_movement_details', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('mat_out_mov_id')->unsigned()->nullable();
          $table->integer('sku')->unsigned();
          $table->integer('quantity')->unsigned();
          $table->timestamps();

          //material_inbound_movement_id FK
          $table->foreign('sku')->references('id')->on('skus');
          $table->foreign('mat_out_mov_id')->references('id')->on('material_outbound_movements');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_outbound_movement_details');
    }
}
