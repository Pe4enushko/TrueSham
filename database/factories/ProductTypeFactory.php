<?php

namespace Database\Factories;

use FakerRestaurant\Provider\ar_SA\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new Restaurant($faker));

        return [
            'Name_pt' => $faker->foodName()
        ];
    }
}
