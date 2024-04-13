<?php

namespace Database\Factories;

use FakerRestaurant\Provider\pt_BR\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;

class UfmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('pt_BR');
        return [
            'Name_ufm' => $faker->word(),
            'Designation' => $faker->text()
        ];
    }
}
