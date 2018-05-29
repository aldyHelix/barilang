<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKehilangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kehilangans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_barang');
            $table->integer('tgl_hilang');
            $table->string('jenis_barang');
            $table->integer('nomor_pemilik');
            $table->string('ciri-ciri_unik');
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
        Schema::dropIfExists('kehilangans');
    }
}
