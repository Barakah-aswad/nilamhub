<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelSarana extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saranas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('sarana')->unsigned();
            $table->string('jenis_jalan');
            $table->string('akses_listrik');
            $table->string('akses_air_bersih');
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
        Schema::dropIfExists('saranas');
    }
}
