<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSabaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sabaq', function (Blueprint $table) {
            $table->bigIncrements('id_sabaq');
            $table->unsignedBigInteger('id_instansi');
            $table->string('nama_sabaq');
            $table->text('keterangan');
            $table->timestamps();
            
            $table->foreign('id_instansi')->references('id')->on('instansi')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sabaq');
    }
}
