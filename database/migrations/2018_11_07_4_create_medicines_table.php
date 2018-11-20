<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { // loai thuoc
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('medicine_type_id');
            $table->string('name');
            $table->string('name_code');
            $table->integer('qty_total');
            $table->timestamps();
            $table->unsignedTinyInteger('disable')->default('0');
            //index key
            $table->index('medicine_type_id');
            $table->foreign('medicine_type_id')->references('id')->on('medicine_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
