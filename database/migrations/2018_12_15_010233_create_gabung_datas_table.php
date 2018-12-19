<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGabungDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gabung_datas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama',100);
            $table->string('nopel',100);
            $table->string('tanggal',50);
            $table->string('kecematan',50);
            $table->string('kelurahan',50);
            $table->string('blok',4);
            $table->string('status')->nullable()->default('-'); 
            $table->string('validasi')->nullable()->default('-'); 
            $table->integer('jumlah')->unsigned();
            $table->string('nop',50)->unique();
            $table->string('tahunpbb',4);
            $table->integer('luastanah')->unsigned();
            $table->integer('kelastanah')->unsigned();
            $table->string('pemohon_1',50)->nullable();
            $table->string('alamat_1',50)->nullable();
            $table->integer('kelas_1')->unsigned();
            $table->string('nop_1',50)->nullable();
            $table->string('pemohon_2',50)->nullable();
            $table->string('alamat_2',50)->nullable();
            $table->integer('kelas_2')->unsigned()->nullable();
            $table->string('nop_2',50)->nullable();
            $table->string('pemohon_3',50)->nullable();
            $table->string('alamat_3',50)->nullable();
            $table->integer('kelas_3')->unsigned()->nullable();
            $table->string('nop_3',50)->nullable();
            $table->string('pemohon_4',50)->nullable();
            $table->string('alamat_4',50)->nullable();
            $table->integer('kelas_4')->unsigned()->nullable();
            $table->string('nop_4',50)->nullable();
            $table->string('pemohon_5',50)->nullable();
            $table->string('alamat_5',50)->nullable();
            $table->integer('kelas_5')->unsigned()->nullable();
            $table->string('nop_5',50)->nullable();
            $table->string('pemohon_6',50)->nullable();
            $table->string('alamat_6',50)->nullable();
            $table->integer('kelas_6')->unsigned()->nullable();
            $table->string('nop_6',50)->nullable();
            $table->string('pemohon_7',50)->nullable();
            $table->string('alamat_7',50)->nullable();
            $table->integer('kelas_7')->unsigned()->nullable();
            $table->string('nop_7',50)->nullable();
            $table->string('pemohon_8',50)->nullable();
            $table->string('alamat_8',50)->nullable();
            $table->integer('kelas_8')->unsigned()->nullable();
            $table->string('nop_8',50)->nullable();
            $table->string('pemohon_9',50)->nullable();
            $table->string('alamat_9',50)->nullable();
            $table->integer('kelas_9')->unsigned()->nullable();
            $table->string('nop_9',50)->nullable();
            $table->string('pemohon_10',50)->nullable();
            $table->string('alamat_10',50)->nullable();
            $table->integer('kelas_10')->unsigned()->nullable();
            $table->string('nop_10',50)->nullable();
            $table->string('pemohon_11',50)->nullable();
            $table->string('alamat_11',50)->nullable();
            $table->integer('kelas_11')->unsigned()->nullable();
            $table->string('nop_11',50)->nullable();
            $table->string('pemohon_12',50)->nullable();
            $table->string('alamat_12',50)->nullable();
            $table->integer('kelas_12')->unsigned()->nullable();
            $table->string('nop_12',50)->nullable();
            $table->string('pemohon_13',50)->nullable();
            $table->string('alamat_13',50)->nullable();
            $table->integer('kelas_13')->unsigned()->nullable();
            $table->string('nop_13',50)->nullable();
            $table->string('pemohon_14',50)->nullable();
            $table->string('alamat_14',50)->nullable();
            $table->integer('kelas_14')->unsigned()->nullable();
            $table->string('nop_14',50)->nullable();
            $table->string('pemohon_15',50)->nullable();
            $table->string('alamat_15',50)->nullable();
            $table->integer('kelas_15')->unsigned()->nullable();
            $table->string('nop_15',50)->nullable();
            $table->string('pemohon_16',50)->nullable();
            $table->string('alamat_16',50)->nullable();
            $table->integer('kelas_16')->unsigned()->nullable();
            $table->string('nop_16',50)->nullable();
            $table->string('pemohon_17',50)->nullable();
            $table->string('alamat_17',50)->nullable();
            $table->integer('kelas_17')->unsigned()->nullable();
            $table->string('nop_17',50)->nullable();
            $table->string('pemohon_18',50)->nullable();
            $table->string('alamat_18',50)->nullable();
            $table->integer('kelas_18')->unsigned()->nullable();
            $table->string('nop_18',50)->nullable();
            $table->string('pemohon_19',50)->nullable();
            $table->string('alamat_19',50)->nullable();
            $table->integer('kelas_19')->unsigned()->nullable();
            $table->string('nop_19',50)->nullable();
            $table->string('pemohon_20',50)->nullable();
            $table->string('alamat_20',50)->nullable();
            $table->integer('kelas_20')->unsigned()->nullable();
            $table->string('nop_20',50)->nullable();
            $table->string('pemohon_21',50)->nullable();
            $table->string('alamat_21',50)->nullable();
            $table->integer('kelas_21')->unsigned()->nullable();
            $table->string('nop_21',50)->nullable();
            $table->string('pemohon_22',50)->nullable();
            $table->string('alamat_22',50)->nullable();
            $table->integer('kelas_22')->unsigned()->nullable();
            $table->string('nop_22',50)->nullable();
            $table->string('pemohon_23',50)->nullable();
            $table->string('alamat_23',50)->nullable();
            $table->integer('kelas_23')->unsigned()->nullable();
            $table->string('nop_23',50)->nullable();
            $table->string('pemohon_24',50)->nullable();
            $table->string('alamat_24',50)->nullable();
            $table->integer('kelas_24')->unsigned()->nullable();
            $table->string('nop_24',50)->nullable();
            $table->string('pemohon_25',50)->nullable();
            $table->string('alamat_25',50)->nullable();
            $table->integer('kelas_25')->unsigned()->nullable();
            $table->string('nop_25',50)->nullable();
            $table->string('pemohon_26',50)->nullable();
            $table->string('alamat_26',50)->nullable();
            $table->integer('kelas_26')->unsigned()->nullable();
            $table->string('nop_26',50)->nullable();
            $table->string('pemohon_27',50)->nullable();
            $table->string('alamat_27',50)->nullable();
            $table->integer('kelas_27')->unsigned()->nullable();
            $table->string('nop_27',50)->nullable();
            $table->string('pemohon_28',50)->nullable();
            $table->string('alamat_28',50)->nullable();
            $table->integer('kelas_28')->unsigned()->nullable();
            $table->string('nop_28',50)->nullable();
            $table->string('pemohon_29',50)->nullable();
            $table->string('alamat_29',50)->nullable();
            $table->integer('kelas_29')->unsigned()->nullable();
            $table->string('nop_29',50)->nullable();
            $table->string('pemohon_30',50)->nullable();
            $table->string('alamat_30',50)->nullable();
            $table->integer('kelas_30')->unsigned()->nullable();
            $table->string('nop_30',50)->nullable();
            $table->string('pemohon_31',50)->nullable();
            $table->string('alamat_31',50)->nullable();
            $table->integer('kelas_31')->unsigned()->nullable();
            $table->string('nop_31',50)->nullable();
            $table->string('pemohon_32',50)->nullable();
            $table->string('alamat_32',50)->nullable();
            $table->integer('kelas_32')->unsigned()->nullable();
            $table->string('nop_32',50)->nullable();
            $table->string('pemohon_33',50)->nullable();
            $table->string('alamat_33',50)->nullable();
            $table->integer('kelas_33')->unsigned()->nullable();
            $table->string('nop_33',50)->nullable();
            $table->string('pemohon_34',50)->nullable();
            $table->string('alamat_34',50)->nullable();
            $table->integer('kelas_34')->unsigned()->nullable();
            $table->string('nop_34',50)->nullable();
            $table->string('pemohon_35',50)->nullable();
            $table->string('alamat_35',50)->nullable();
            $table->integer('kelas_35')->unsigned()->nullable();
            $table->string('nop_35',50)->nullable();
            $table->string('pemohon_36',50)->nullable();
            $table->string('alamat_36',50)->nullable();
            $table->integer('kelas_36')->unsigned()->nullable();
            $table->string('nop_36',50)->nullable();
            $table->string('pemohon_37',50)->nullable();
            $table->string('alamat_37',50)->nullable();
            $table->integer('kelas_37')->unsigned()->nullable();
            $table->string('nop_37',50)->nullable();
            $table->string('pemohon_38',50)->nullable();
            $table->string('alamat_38',50)->nullable();
            $table->integer('kelas_38')->unsigned()->nullable();
            $table->string('nop_38',50)->nullable();
            $table->string('pemohon_39',50)->nullable();
            $table->string('alamat_39',50)->nullable();
            $table->integer('kelas_39')->unsigned()->nullable();
            $table->string('nop_39',50)->nullable();
            $table->string('pemohon_40',50)->nullable();
            $table->string('alamat_40',50)->nullable();
            $table->integer('kelas_40')->unsigned()->nullable();
            $table->string('nop_40',50)->nullable();
            $table->string('pemohon_41',50)->nullable();
            $table->string('alamat_41',50)->nullable();
            $table->integer('kelas_41')->unsigned()->nullable();
            $table->string('nop_41',50)->nullable();
            $table->string('pemohon_42',50)->nullable();
            $table->string('alamat_42',50)->nullable();
            $table->integer('kelas_42')->unsigned()->nullable();
            $table->string('nop_42',50)->nullable();
            $table->string('pemohon_43',50)->nullable();
            $table->string('alamat_43',50)->nullable();
            $table->integer('kelas_43')->unsigned()->nullable();
            $table->string('nop_43',50)->nullable();
            $table->string('pemohon_44',50)->nullable();
            $table->string('alamat_44',50)->nullable();
            $table->integer('kelas_44')->unsigned()->nullable();
            $table->string('nop_44',50)->nullable();
            $table->string('pemohon_45',50)->nullable();
            $table->string('alamat_45',50)->nullable();
            $table->integer('kelas_45')->unsigned()->nullable();
            $table->string('nop_45',50)->nullable();
            $table->string('pemohon_46',50)->nullable();
            $table->string('alamat_46',50)->nullable();
            $table->integer('kelas_46')->unsigned()->nullable();
            $table->string('nop_46',50)->nullable();
            $table->string('pemohon_47',50)->nullable();
            $table->string('alamat_47',50)->nullable();
            $table->integer('kelas_47')->unsigned()->nullable();
            $table->string('nop_47',50)->nullable();
            $table->string('pemohon_48',50)->nullable();
            $table->string('alamat_48',50)->nullable();
            $table->integer('kelas_48')->unsigned()->nullable();
            $table->string('nop_48',50)->nullable();
            $table->string('pemohon_49',50)->nullable();
            $table->string('alamat_49',50)->nullable();
            $table->integer('kelas_49')->unsigned()->nullable();
            $table->string('nop_49',50)->nullable();
            $table->string('pemohon_50',50)->nullable();
            $table->string('alamat_50',50)->nullable();
            $table->integer('kelas_50')->unsigned()->nullable();
            $table->string('nop_50',50)->nullable();
            $table->string('nagab',50)->nullable();
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
        Schema::dropIfExists('gabung_datas');
    }
}
