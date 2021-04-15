<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulspesialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulspesials', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
            $table->string('level');
            $table->string('tingkat_sekolah');
            $table->string('judul_modul');
            $table->string('deskripsi_modul');
            $table->string('tantangan');
            $table->string('url_video');
            $table->string('url_dokumen');
            $table->string('url_gambar');
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
        Schema::dropIfExists('modulspesials');
    }
}
