<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddApproveToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('id_approve')->nullable();
            $table->string('kartu-e')->nullable();
            $table->string('f_ktp')->nullable();
            $table->string('f_sim')->nullable();
            $table->string('f_stnk')->nullable();
            $table->string('no_rekening')->nullable();
            $table->string('bukti_transaksi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id_approve');
            $table->dropColumn('kartu-e');
            $table->dropColumn('f_ktp');
            $table->dropColumn('f_sim');
            $table->dropColumn('f_stnk');
            $table->dropColumn('no_rekening');
            $table->dropColumn('bukti_transaksi');
        });
    }
}
