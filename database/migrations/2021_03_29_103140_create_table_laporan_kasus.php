<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLaporanKasus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporankasus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('petani_id')->unsigned();
            $table->string('type');
            $table->string('sifat_laporan');
            $table->text('deskripisi');
            $table->text('kontributor_by')->nullable();
            $table->string('st_laporan');
            $table->timestamp('waktu_ttp_laporan')->nullable();
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
        Schema::dropIfExists('laporankasus');
    }
}
