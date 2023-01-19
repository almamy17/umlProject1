<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('devis', function (Blueprint $table) {
            $table->id();
            $table->string("nomClient");
            $table->string("produit");
            $table->integer("montant");
            $table->string("statutDevis");
            $table->integer("duree");
            $table->date("dateCreation");
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
        Schema::table("devis",function(Blueprint $table){
            $table->dropConstrainedForeignId('courtier_id');
        });
        Schema::dropIfExists('devis');
    }
}
