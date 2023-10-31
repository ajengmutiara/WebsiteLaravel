<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class createDataBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_barang', function (Blueprint $table) {
            $table->id();
            $table->string('type_barang');
            $table->string('jenis_barang');
            $table->string('mitra_pengirim');
            $table->string('merk_barang');
            $table->string('serial_number');
            $table->integer('jumlah_barang');
            $table->string('kelengkapan_barang');
            $table->date('tanggal_penerimaan');
            $table->string('yang_menerima');
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
        Schema::dropIfExists('data_barang');
    }
};
