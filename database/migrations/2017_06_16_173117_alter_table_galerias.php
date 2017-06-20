<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTableGalerias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('galerias', ['nomegaleria','nomefoto'])) {
            Schema::table('galerias', function (Blueprint $table) {
                $table->string('nomegaleria',100);
                $table->renameColumn('nomefoto','url');
                $table->string('nome');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('galerias', function (Blueprint $table) {
            //
        });
    }
}
