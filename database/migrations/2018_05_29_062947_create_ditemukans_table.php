<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDitemukansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ditemukans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->integer('tgl_ditemukan');
            $table->string('jenis_barang');
            $table->string('nomor_penemu');
            $table->string('lokasi_ditemukan');
            $table->string('ciri_ciri_unik');
            $table->string('file_gambar');
            $table->text('deskripsi');
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
        Schema::dropIfExists('ditemukans');
    }
}
