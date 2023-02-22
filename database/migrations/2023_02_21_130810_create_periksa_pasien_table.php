<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriksaPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periksa_pasien', function (Blueprint $table) {
            $table->id();
            $table->string('no_rawat');
            $table->foreign('no_rawat')->references('no_rawat')->on('registrasi_pasien');
            $table->string('kd_dokter');
            $table->foreign('kd_dokter')->references('kd_dokter')->on('dokter');
            $table->longText('ket_diagnosa');
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
        Schema::dropIfExists('periksa_pasien');
    }
}
