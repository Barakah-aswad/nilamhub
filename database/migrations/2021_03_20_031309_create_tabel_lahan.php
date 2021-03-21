<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelLahan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lahans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('petani_id')->unsigned();
            $table->foreign('petani_id')->references('id')->on('petanis')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->integer('total_luas');
            $table->integer('lat');
            $table->integer('log');
            $table->string('alamat_lahan');
            $table->string('no_sertifikat')->nullable();
            $table->string('status_tanah');
            $table->integer('tahun_garap');
            $table->string('jenis_pengaman');
            $table->integer('jrk_lahan');
            $table->timestamps();

            $table->engine = 'innoDB';
            $table->unique('no_sertifikat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lahans');
    }
}
