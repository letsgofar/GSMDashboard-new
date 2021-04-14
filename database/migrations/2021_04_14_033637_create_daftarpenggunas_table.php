<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarpenggunasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarpenggunas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 40);
            $table->string('jabatan', 40);
            $table->string('sekolah', 40);
            $table->string('kabupaten', 40);
            $table->string('label_gsm', 40);
            $table->string('role', 40);
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
        Schema::dropIfExists('daftarpenggunas');
    }
}
