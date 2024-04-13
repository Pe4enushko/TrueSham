<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use FakerRestaurant\Provider\tr_TR\Restaurant;

class TypeOfDishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('tr_TR');
        $faker->addProvider(new Restaurant($faker));

        return [
            'Name_tod' => $faker->chrome()
        ];
    }
}
