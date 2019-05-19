<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContratsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tcontrat',100)->nullable();
            $table->string('qualite',100)->nullable();
            $table->string('categorie',100)->nullable();
            $table->datetime('dateEmb')->nullable();
            $table->datetime('dateFC')->nullable();
            $table->double('salaire',10)->nullable();
            $table->double('prixHeur',10)->nullable(); 
            $table->integer('employe_id')->unsigned();            
            $table->foreign('employe_id')->references('id')->on('employes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contrats');
    }
}
