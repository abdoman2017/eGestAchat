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
            $table->integer('code_Utl')->primary();
            $table->string('nom_Utl');
            $table->string('prenom_Utl');
            $table->integer('etat_Utl');
            $table->integer('direction_code_dr')->unsigned();
            $table->integer('structure_code_str')->unsigned();
            $table->integer('privilege_code_prv')->unsigned();
            $table->integer('profil_code_prf')->unsigned();
            $table->datetime('deleted_at')->nullable();
            $table->timestamps();
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
