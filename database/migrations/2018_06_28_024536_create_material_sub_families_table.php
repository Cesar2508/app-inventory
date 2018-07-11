<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialSubFamiliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material_sub_families', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('material_family_id')->unsigned() ;
            $table->string('name',128);
            // $table->string('slug',128)->unique();
            $table->timestamps();

            //materialFamily_id FK
            $table->foreign('material_family_id')->references('id')->on('material_families');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('material_sub_families');
    }
}
