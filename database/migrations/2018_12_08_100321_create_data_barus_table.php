<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataBarusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('pemohon')->unique();
            $table->string('nopel');
            $table->string('noptetangga');
            $table->string('tanggal');
            $table->string('kecematan');
            $table->string('kelurahan');
            $table->string('blok');
            $table->string('nop');
            $table->string('tahunpbb');
            $table->string('status')->nullable()->default('-'); 
            $table->string('validasi')->nullable()->default('-');  
            $table->integer('luasbangun')->unsigned()->nullable();
            $table->integer('kelasbangun')->unsigned()->nullable();
            $table->integer('luastanah')->unsigned();
            $table->integer('kelastanah')->unsigned();
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
        Schema::dropIfExists('data_barus');
    }
}
