<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLapTanam extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lap_tanams', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('petani_id')->unsigned();
            $table->bigInteger('proposal_id')->unsigned();
            $table->text('deskripsi');
            $table->string('user_by')->nullable();
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
        Schema::dropIfExists('lap_tanams');
    }
}
