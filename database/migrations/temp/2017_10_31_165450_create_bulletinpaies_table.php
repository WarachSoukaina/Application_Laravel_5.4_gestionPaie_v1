<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBulletinpaiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bulletinpaies', function (Blueprint $table) {
            $table->increments('id');

            $table->date('dateBp')->nullable();
            $table->double('salaireNet')->nullable();
            $table->double('salaireBrut')->nullable();
            $table->double('enciennete')->nullable();
            $table->double('mcnss')->nullable();
            $table->double('mamo')->nullable();
            $table->double('migr')->nullable();
            $table->integer('nTotalHeur')->nullable();
            $table->integer('nTotalJour')->nullable();                
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
        Schema::dropIfExists('bulletinpaies');
    }
}
