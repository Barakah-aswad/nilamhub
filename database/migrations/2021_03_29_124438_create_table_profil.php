<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableProfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->string('jenis_kelamin');
            $table->integer('no_telepon');
            $table->string('pekerjaan');
            $table->string('alamat_provinsi');
            $table->string('alamat_lengkap');
            $table->integer('nomor_kk')->nullable();
            $table->integer('nomor_ktp')->nullable();
            $table->integer('umur');
            $table->integer('jml_angg_klg');
            $table->string('agama');
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
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
        Schema::dropIfExists('profils');
    }
}
