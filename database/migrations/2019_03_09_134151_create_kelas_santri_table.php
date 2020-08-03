<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKelasSantriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_santri', function (Blueprint $table) {
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('santri_id');
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('kelas')
                ->onDelete('cascade');
            $table->foreign('santri_id')->references('id')->on('santri')
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
        Schema::dropIfExists('kelas_santri');
    }
}
