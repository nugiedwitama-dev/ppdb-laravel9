<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulirs', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable()->unique();
            $table->foreignId('user_id');
            $table->string('nama')->nullable();
            $table->string('nik')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable()->date('d-m-Y');
            $table->string('jenis_kelamin')->nullable();
            $table->string('agama')->nullable();
            $table->string('nama_ortu')->nullable();
            $table->string('alamat_ortu')->nullable();
            $table->string('phone_ortu')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('alamat_sekolah')->nullable();
            $table->string('provinsi_sekolah')->nullable();
            $table->string('kabupaten_sekolah')->nullable();
            $table->string('phone_sekolah')->nullable();
            $table->string('keahlian1')->nullable();
            $table->string('keahlian2')->nullable();
            $table->string('pas_foto')->nullable();
            $table->string('akta')->nullable();
            $table->string('piagam')->nullable();
            $table->string('nilai')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('formulirs');
    }
}
