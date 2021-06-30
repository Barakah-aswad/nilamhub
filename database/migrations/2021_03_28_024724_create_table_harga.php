<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hargas', function (Blueprint $table) {
            $table->id();
            $table->string('posted_by');
            $table->string('nama_komoditas');
            $table->integer('real_harga');
            $table->integer('harga_hulu');
            $table->integer('harga_hilir');
            //$table->bigInteger('daerah_id');
            $table->string('wilayah');
            $table->timestamps();
            
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hargas');
    }
}
