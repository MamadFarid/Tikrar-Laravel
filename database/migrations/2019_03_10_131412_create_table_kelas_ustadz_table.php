<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKelasUstadzTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas_ustadz', function (Blueprint $table) {
            $table->unsignedBigInteger('kelas_id');
            $table->unsignedBigInteger('ustadz_id');
            $table->timestamps();

            $table->foreign('kelas_id')->references('id')->on('kelas')
                ->onDelete('cascade');;
            $table->foreign('ustadz_id')->references('id')->on('ustadz')
                ->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_kelas_ustadz');
    }
}
