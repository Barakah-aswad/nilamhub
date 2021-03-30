<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserPetani extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petanis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->string('nama_provinsi');
            $table->integer('nomor_kk');
            $table->integer('nomor_ktp');
            $table->integer('no_telepon');
            $table->string('alamat_lengkap');
            $table->integer('umur');
            $table->integer('jml_angg_klg');
            $table->string('agama');
            $table->string('tmp_lahir');
            $table->integer('tgl_lahir');
            $table->integer('rating')->nullable();
            $table->integer('role_id');
            $table->timestamps();

            $table->engine = 'InnoDB';
            $table->unique('nomor_kk');
            $table->unique('nomor_ktp');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petanis');
    }
}
