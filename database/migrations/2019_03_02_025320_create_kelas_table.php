<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('instansi_id')->index();
            $table->string('nama_kelas');
            $table->string('deskripsi_kelas')->nullable();
            $table->char('kode_kelas', 8)->unique();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('instansi_id')->references('id')->on('instansi')
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
        Schema::dropIfExists('kelas');
    }
}
