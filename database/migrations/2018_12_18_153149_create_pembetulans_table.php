<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembetulansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembetulans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nopel',100);
            $table->string('pemohon',100);
            $table->string('tanggal',50);
            $table->string('kecematan',50);
            $table->string('alamat',100);
            $table->string('kelurahan',50);
            $table->string('blok',4);
            $table->string('nop',50)->unique();
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
        Schema::dropIfExists('pembetulans');
    }
}
