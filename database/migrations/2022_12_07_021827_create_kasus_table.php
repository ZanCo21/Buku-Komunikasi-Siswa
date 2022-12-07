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
        Schema::create('kasus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('siswa_id');
            $table->bigInteger('kelas_id');
            $table->bigInteger('jurusan_id');
            $table->bigInteger('walikelas_id');
            $table->bigInteger('pelanggaran_id');
            $table->bigInteger('point');
            $table->bigInteger('sanksi_id');
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
        Schema::dropIfExists('kasus');
    }
};
