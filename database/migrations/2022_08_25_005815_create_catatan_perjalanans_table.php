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
        Schema::create('catatan_perjalanans', function (Blueprint $table) {
            $table->bigIncrements('id')->primarykey();
            $table->integer('user_id');
            $table->string('nama');
            $table->date('tanggal');
            $table->string('lokasi');
            $table->time('waktu');
            $table->integer('suhu');
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
        Schema::dropIfExists('catatan_perjalanans');
    }
};
