<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstName');
            $table->string('lastName');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('tokenPro')->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('address')->nullable();
            $table->boolean('gender')->nullable();
            $table->unsignedTinyInteger('accountAccess')->nullable();
            $table->unsignedTinyInteger('countTryingAccess')->nullable();
            $table->unsignedTinyInteger('lockAccount')->nullable();
            $table->unsignedTinyInteger('is_admin')->default('0');
            $table->timestamps();
            $table->unsignedTinyInteger('disable')->default('0');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('accounts');
    }
}
