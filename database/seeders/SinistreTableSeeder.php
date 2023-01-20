<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SinistreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("sinistres")->insert([
            ["nomClient"=>"Konan Evariste","typeSinistre"=>"accident","description"=>"accident de circulation","statutSinistre"=>"grave","dateSinistre"=>now(),"courtier_id"=>3],
            ["nomClient"=>"Gauvin Ariel","typeSinistre"=>"innondation","description"=>"maison innondée","statutSinistre"=>"grave","dateSinistre"=>now(),"courtier_id"=>6],
            ["nomClient"=>"Dion Natanaël","typeSinistre"=>"incendie","description"=>"maison incendiée","statutSinistre"=>" moyen grave","dateSinistre"=>now(),"courtier_id"=>2],
        ]);
    }
}
