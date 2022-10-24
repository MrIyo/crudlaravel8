<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerimaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('terima', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jeniskelamin')->nullable();
            $table->bigInteger('notelpon')->nullable();
            $table->string('email')->nullable();
            $table->string('id_lokasi')->nullable();
            $table->string('id_kendaraan')->nullable();
            $table->string('plat_nomor')->nullable();
            $table->string('id_paket')->nullable();
            $table->string('harga')->nullable();
            $table->string('kartu_e')->nullable();
            $table->string('f_ktp')->nullable();
            $table->string('f_sim')->nullable();
            $table->string('f_stnk')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('bukti_transaksi')->nullable();
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
        Schema::dropIfExists('terima');
    }
}
