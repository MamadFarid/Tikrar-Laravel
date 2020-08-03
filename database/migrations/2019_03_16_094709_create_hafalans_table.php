<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHafalansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hafalan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('index_ayat_dihafal');
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('ustadz_id');
            $table->unsignedBigInteger('santri_id');
            $table->unsignedBigInteger('sabaq_id');
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('kelas')
                ->onDelete('cascade');
            $table->foreign('ustadz_id')->references('id')->on('ustadz')
                ->onDelete('cascade');
            $table->foreign('santri_id')->references('id')->on('santri')
                ->onDelete('cascade');
            $table->foreign('sabaq_id')->references('id_sabaq')->on('sabaq')
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
        Schema::dropIfExists('hafalans');
    }
}
