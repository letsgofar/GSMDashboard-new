<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('npsn', 8);
            $table->string('nama_sekolah', 40);
            $table->string('alamat', 100);
            $table->string('kecamatan', 40);
            $table->string('kabupaten', 40);
            $table->string('provinsi', 40);
            $table->string('bentuk', 40);
            $table->string('status', 40);
            $table->string('label_gsm', 40);
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
        Schema::dropIfExists('schools');
    }
}
