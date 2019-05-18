<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnEtatId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->integer('etat_id')->unsigned();
            $table->foreign('etat_id')->references('id')->on('etats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('utilisateurs', function (Blueprint $table) {
            $table->dropForeign(['etat_id']);
            $table->dropColumn('etat_id');
        });
    }
}