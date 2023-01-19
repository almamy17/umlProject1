<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experts', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("prenom");
            $table->string("specialite")->nullable();
            $table->string("experience")->nullable();
            $table->boolean("disponibilite");
            $table->string("email")->nullable();
            $table->string("telephone")->nullable();
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
        Schema::table("experts",function(Blueprint $table){
            $table->dropConstrainedForeignId('courtier_id');
        });
        Schema::dropIfExists('experts');
    }
}
