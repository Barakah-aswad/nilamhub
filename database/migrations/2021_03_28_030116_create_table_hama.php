<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableHama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hamas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_hama'); //jenis hama cth:tikus, dll.
            $table->integer('post_by');
            $table->string('ke_tanaman');
            $table->text('pestisida')->nullable();
            $table->text('hama_tanaman')->nullable();
            $table->text('penanganan')->nullable();
            $table->timestamps();

            $table->engine = 'InnoDB';
        });

        Schema::create('penyakits', function(Blueprint $table){
            $table->id();
            $table->string('jenis_penyakit'); // jenis virus cth: bakteri, dll.
            $table->text('ke_tanaman')->nullable();
            $table->text('pestisida')->nullable();
            $table->text('penanganan')->nullable();
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
        Schema::dropIfExists('hamas');
        Schema::dropIfExists('penyakits');
    }
}
