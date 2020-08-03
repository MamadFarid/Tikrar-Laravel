<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAyatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayat', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('surat_id');
            $table->unsignedInteger('ayat');
            $table->text('text');
            $table->text('terjemah')->nullable();
            $table->integer('page');
            $table->integer('line');
            $table->tinyInteger('juz');

            $table->foreign('surat_id')->references('id')->on('surat')
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
        Schema::dropIfExists('ayats');
    }
}
