<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('towns', function (Blueprint $table) {
            $table->id();
            $table->string('town_title', 30);
            $table->integer('distance');
            $table->integer('days');
            $table->integer('price');
            $table->bigInteger('country_id')->unsigned();
            $table->timestamps();
            $table->foreign('country_id')->references('id')->on('countries');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('towns');
    }
};
