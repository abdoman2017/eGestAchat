<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_Utl');
            $table->string('nom_Utl');
            $table->string('prenom_Utl');
            $table->integer('etat_Utl')->nullable();
            $table->integer('direction_id');
            $table->integer('structure_id');
            $table->integer('privilege_id');
            $table->integer('profil_id');
            $table->dateTime('deleted_at', DB::raw(0))->nullable();
            $table->dateTime('created_at', DB::raw(0))->nullable();
            $table->dateTime('updated_at', DB::raw(0))->nullable();
            $table->foreign('direction_id')->references('id')->on('directions');
            $table->foreign('structure_id')->references('id')->on('structures');
            $table->foreign('privilege_id')->references('id')->on('privileges');
            $table->foreign('profil_id')->references('id')->on('profils');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}