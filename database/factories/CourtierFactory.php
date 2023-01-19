<?php

namespace Database\Factories;

use App\Models\Courtier;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourtierFactory extends Factory
{
    
    //protected $model=Courtier::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Courtier::class;
    public function definition()
    {
        return [
            "nom"=>$this->faker->lastName,
            "prenom"=>$this->faker->firstName(),
            "ventes"=>rand(1,500)
        ];
    }
}
