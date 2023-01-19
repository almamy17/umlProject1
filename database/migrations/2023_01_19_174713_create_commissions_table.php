<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commissions', function (Blueprint $table) {
            $table->id();
            $table->float("taux");
            $table->integer("montant");
            $table->string("typeProduit");
            $table->date("datePaiement");
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
        Schema::table("commissions",function(Blueprint $table){
            $table->dropConstrainedForeignId('courtier_id');
        });
        Schema::dropIfExists('commissions');
    }
}
