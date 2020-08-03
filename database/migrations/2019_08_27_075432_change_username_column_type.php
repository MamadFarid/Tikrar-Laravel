<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeUsernameColumnType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 12)
                    ->change();
        });

        Schema::table('ustadz', function (Blueprint $table) {
            $table->string('username', 12)
                    ->change();
        });

        Schema::table('santri', function (Blueprint $table) {
            $table->string('username', 12)
                    ->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('username', 8)
                    ->change();
        });

        Schema::table('ustadz', function (Blueprint $table) {
            $table->string('username', 8)
                    ->change();
        });

        Schema::table('santri', function (Blueprint $table) {
            $table->string('username', 8)
                    ->change();
        });
    }
}
