<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approves', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('jeniskelamin');
            $table->bigInteger('notelpon');
            $table->string('email');
            $table->string('id_kendaraan');
            $table->string('plat_nomor');
            $table->string('kartu_e');
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
        Schema::dropIfExists('approves');
    }
}
