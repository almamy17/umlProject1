<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContratTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            //$table->string("type de contrat");
            $table->string("renouvelable")->nullable();
            $table->string("etat")->nullable();
            $table->string("options")->nullable();
            $table->string("couverture")->nullable();
            $table->date("dateDebut");
            $table->date("dateFin")->nullable();
            $table->foreignId("courtier_id")->constrained("courtiers");
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("contrats",function(Blueprint $table){
            $table->dropConstrainedForeignId('courtier_id');
        });
        Schema::dropIfExists('contrats');
    }
}
