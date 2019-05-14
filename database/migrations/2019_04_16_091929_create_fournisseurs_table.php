<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFournisseursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fournisseurs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('abreviation')->nullable();
            $table->string('adresse');
            $table->string('numero_compte')->nullable();
            $table->string('numero_tel');
            $table->string('numero_fax')->nullable();
            $table->string('email')->nullable();
            $table->dateTime('deleted_at', DB::raw(0))->nullable();
            $table->dateTime('created_at', DB::raw(0))->nullable();
            $table->dateTime('updated_at', DB::raw(0))->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fournisseurs');
    }
}