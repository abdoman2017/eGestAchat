<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('code_Utl')->primary();
            $table->string('nom_Utl');
            $table->string('prenom_Utl');
            $table->integer('etat_Utl');
            $table->string('direction_code_dr');
            $table->string('structure_code_str');
            $table->string('privilege_code_prv');
            $table->string('profil_code_prf');
            $table->dateTime('deleted_at', DB::raw(0))->nullable();
            $table->dateTime('created_at', DB::raw(0))->nullable();
            $table->dateTime('updated_at', DB::raw(0))->nullable();
            $table->foreign('direction_code_dr')->references('code_dr')->on('directions');
            $table->foreign('structure_code_str')->references('code_str')->on('structures');
            $table->foreign('privilege_code_prv')->references('code_prv')->on('privileges');
            $table->foreign('profil_code_prf')->references('code_prf')->on('profils');
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