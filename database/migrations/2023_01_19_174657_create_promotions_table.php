<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->string("nomProm");
            $table->text("description")->nullable();
            $table->string("avantage")->nullable();
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
        Schema::table("promotions",function(Blueprint $table){
            $table->dropConstrainedForeignId('courtier_id');
        });
        Schema::dropIfExists('promotions');
    }
}
