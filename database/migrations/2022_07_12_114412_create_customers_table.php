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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('surname', 64);
            $table->string('email', 100);
            $table->string('phone', 30);
            $table->bigInteger('town_id')->unsigned();
            $table->timestamps();
            $table->foreign('town_id')->references('id')->on('towns');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
