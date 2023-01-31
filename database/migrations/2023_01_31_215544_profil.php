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
        Schema::dropIfExists('profil');
        Schema::create('profil', function (Blueprint $table) {
            $table->id('npsn');
            $table->string('nama');
            $table->string('nss')->nullable();
            $table->string('akreditasi')->nullable();
            $table->string('alamat')->nullable();
            $table->string('desa')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('email')->nullable();
            $table->string('web')->nullable();
            $table->string('telp')->nullable();
            $table->date('tanggal_terbentuk')->nullable();
            $table->string('deskripsi', 2048)->nullable();
            $table->string('sejarah', 2048)->nullable();
            $table->string('visi', 2048)->nullable();
            $table->string('misi', 2048)->nullable();
            $table->timestamps();
            $table->foreignId('id_kepsek')->nullable()->constrained('guru')->nullOnDelete()->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('profil');
    }
};
