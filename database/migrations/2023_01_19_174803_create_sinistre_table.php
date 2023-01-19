<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSinistreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinistres', function (Blueprint $table) {
            $table->id();
            $table->string("nomClient");
            $table->string("typeSinistre");
            $table->text("description")->nullable();
            $table->string("statutSinistre");
            $table->date("dateSinistre");
            $table->foreignId("courtier_id")->constrained("courtiers");
            $table->string("expertAssigne")->nullable();
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
        Schema::table("sinistres",function(Blueprint $table){
            $table->dropConstrainedForeignId('courtier_id');
        });
        
        Schema::dropIfExists('sinistres');
    }
}
