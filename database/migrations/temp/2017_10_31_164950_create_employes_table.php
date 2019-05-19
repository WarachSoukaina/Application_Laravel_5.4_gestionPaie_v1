<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->increments('id'); 
            $table->integer('nmatricule')->unique();
            $table->string('nom',100)->nullable();
            $table->string('prenom',100)->nullable();
            $table->string('dnaiss',100)->nullable();
            $table->string('adres',150)->nullable();
            $table->string('tel',100)->nullable();
            $table->string('email',100)->nullable();
            $table->string('cin',100)->nullable();
            $table->string('photo',150)->nullable();
            $table->string('nationalite',100)->nullable();
            $table->string('sexe',50)->nullable();
            $table->string('situation',100)->nullable();
            $table->integer('nenfant')->nullable();          
            $table->string('rib',100)->nullable();
            $table->string('mpaiment',100)->nullable();
            $table->string('banque',100)->nullable();
            $table->string('agence',100)->nullable();
            $table->string('ncnss',100)->nullable();
            $table->boolean('dcnss')->default(1);
            $table->boolean('damo')->default(1);
            $table->boolean('dIgr')->default(0);                                 
            $table->integer('service_id')->unsigned();
            $table->foreign('service_id')->references('id')->on('services');         
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
        Schema::dropIfExists('employes');
    }
}
