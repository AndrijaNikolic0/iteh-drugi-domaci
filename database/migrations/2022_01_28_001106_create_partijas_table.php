<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partijas', function (Blueprint $table) {
            $table->id();
            $table->string('nazivPartije');
            $table->integer('godinaOsnivanja');
            $table->string('predsednik');
            $table->integer('brojClanova');
            $table->foreignId('skupstinaID')->constrained('skupstinas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partijas');
    }
}
