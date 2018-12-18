<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalikNamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balik_namas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',100);
            $table->string('pemohon',100);
            $table->string('nopel',100);
            $table->string('tanggalterima',50);
            $table->string('tanggalselesai',50);
            $table->string('kecematan',50);
            $table->string('kelurahan',50);
            $table->string('blok',4);
            $table->integer('luasbangun')->unsigned()->nullable();
            $table->integer('kelasbangun')->unsigned()->nullable();
            $table->integer('luastanah')->unsigned();
            $table->integer('kelastanah')->unsigned();
            $table->string('nop',50)->unique();
            $table->string('tahunpbb',4);
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
        Schema::dropIfExists('balik_namas');
    }
}
