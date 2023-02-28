<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrasiPasienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrasi_pasien', function (Blueprint $table) {
            $table->unsignedBigInteger('no_rm');
            $table->foreign('no_rm')->references('no_rm')->on('pasien');
            $table->string('no_registrasi', 3);
            $table->string('no_rawat', 17)->primary();
            $table->unsignedBigInteger('id_poli');
            $table->foreign('id_poli')->references('id_poli')->on('poli');
            $table->date('tgl_registrasi');
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
        Schema::dropIfExists('registrasi_pasien');
    }
}
