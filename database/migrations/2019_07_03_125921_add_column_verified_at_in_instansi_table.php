<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnVerifiedAtInInstansiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('instansi', function (Blueprint $table) {
            $table->timestamp('verified_at')
                ->after('keterangan')
                ->nullable()
                ->default(null);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instansi', function (Blueprint $table) {
            $table->dropColumn('verified_at');
        });
    }
}
