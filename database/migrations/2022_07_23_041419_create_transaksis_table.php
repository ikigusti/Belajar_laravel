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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->integer('no_transaksi');
            $table->string('id_pengunjung');
            $table->integer('id_karyawan');
            $table->integer('jml_kamar');
            $table->string('tgl_masuk');
            $table->string('tgl_keluar');
            $table->string('lama_nginap');
            $table->string('total_harga');
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
        Schema::dropIfExists('transaksis');
    }
};
