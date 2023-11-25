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
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->bigInteger('harga');
            $table->bigInteger('id_region');
            $table->bigInteger('id_kecamatan');
            $table->string('alamat');
            $table->string('deskripsi')->nullable();
            $table->string('fasilitas')->nullable();
            $table->string('sosmed')->nullable();
            $table->string('contact')->nullable();
            $table->string('latitude');
            $table->string('longitude');
            $table->string('cover');
            $table->string('foto1')->nullable();
            $table->string('foto2')->nullable();
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
        Schema::dropIfExists('wisata');
    }
};
