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
            $table->id('id_wisata');
            $table->string('nama');

            $table->unsignedBigInteger('id_jenis');
            $table->foreign('id_jenis')
                    ->references('id_jenis')
                    ->on('jenis')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->bigInteger('harga');

            $table->unsignedBigInteger('id_region');
            $table->foreign('id_region')
                    ->references('id_region')
                    ->on('region')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

            $table->unsignedBigInteger('id_kecamatan');
            $table->foreign('id_kecamatan')
                    ->references('id_kecamatan')
                    ->on('kecamatan')
                    ->onUpdate('cascade')
                    ->onDelete('cascade');

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
