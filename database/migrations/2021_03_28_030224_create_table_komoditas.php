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
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

           $table->foreignId('hama_id')
                 ->constrained()
                 ->onUpdate('cascade')
                 ->onDelete('cascade');

            $table->foreignId('penyakit_id')
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade');

            $table->foreignId('harga_id')
                  ->constrained()
                  ->onUpdate('cascade')
                  ->onDelete('cascade'); 

           $table->string('jenis_komoditas');
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
