<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {// benh nhan
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('weight');
            $table->unsignedInteger('age');
            $table->unsignedInteger('disease_type_id');
            $table->string('phone')->unique();
            $table->string('address');
            $table->timestamps();
            $table->unsignedTinyInteger('disable')->default('0');
            //index key
            $table->index('disease_type_id');
            $table->foreign('disease_type_id')->references('id')->on('disease_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
