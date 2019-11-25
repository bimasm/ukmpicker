<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotoukmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotoukm', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_ukm')->unsigned();
            $table->foreign('id_ukm')->references('id')->on('ukm')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('foto');
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
        Schema::dropIfExists('fotoukm');
    }
}
