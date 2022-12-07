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
        Schema::create('siswa', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('kelas');
            $table->string('jurusan');
            $table->integer('nis');
            $table->string('jeniskelamin');
            $table->string('alamat');
            $table->integer('notelp');
            $table->string('email');
            $table->string('password');


            $table->unsignedBigInteger('walikelas_id');
 
            $table->foreign('walikelas_id')->references('id')->on('guru');
            // $table->bigInteger('walikelas_id')->unsigned();


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
        Schema::dropIfExists('siswa');
    }
};
