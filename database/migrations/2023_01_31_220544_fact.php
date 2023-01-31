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
        Schema::dropIfExists('fact');
        Schema::create('fact', function (Blueprint $table) {
            $table->id();
            $table->integer('siswa')->nullable();
            $table->integer('guru')->nullable();
            $table->integer('agenda')->nullable();
            $table->integer('galeri')->nullable();
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
        Schema::drop('fact');
    }
};
