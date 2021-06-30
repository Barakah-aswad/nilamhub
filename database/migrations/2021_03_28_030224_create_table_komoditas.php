<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKomoditas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komoditas', function (Blueprint $table) {
            $table->id();
            $table->integer('post_by')->unsigned();
            $table->foreign('post_by')->references('id')->on('users')
                  ->onUpdate('cascade');
            $table->foreignId('tanaman_id')->constrained('tanaman')
                  ->onUpdate('cascade');
            $table->text('jenis_hama');
            $table->text('jenis_penyakit');
            $table->integer('masa_tanam');
            $table->integer('ph_tanah');
            $table->integer('stdr_tinggi_lahan');
            $table->integer('rating')->nullable();
            $table->text('deskripsi')->nullable();
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
        Schema::dropIfExists('komoditas');
    }
}
