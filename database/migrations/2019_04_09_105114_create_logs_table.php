<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs_hafalan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hafalan_id');
            $table->unsignedInteger('ayat_id');

            $table->foreign('hafalan_id')->references('id')->on('hafalan')
                ->onDelete('cascade');
            $table->foreign('ayat_id')->references('id')->on('ayat')
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
        Schema::dropIfExists('logs_hafalan');
    }
}
