<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelAktifasiPetani extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktivasi_akuns', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->bigInteger('lahan_id')->nullable();
            $table->integer('verifed_by')->nullable();
            $table->boolean('verifed')->default(0);
            $table->timestamp('waktu_verifikasi')->nullable();
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
        Schema::dropIfExists('aktivasi_akuns');
    }
}
