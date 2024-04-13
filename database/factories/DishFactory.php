<?php

namespace Database\Factories;

use App\Models\TypeOfDish;
use App\Models\Ufm;
use FakerRestaurant\Provider\ja_JP\Restaurant;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Type;

class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('ja_JP');
        $faker->addProvider(new Restaurant($faker));

        return [
            'Code_ufm' => Ufm::get()->random()->Code_ufm,
            'Name_dish' => $faker->foodName(),
            'Description' => $faker->realText(70),
            'Calorie' => $faker->numberBetween(100, 9000),
            'Price' => $faker->numberBetween(100, 19000),
            'Code_tod' => TypeOfDish::get()->random()->Code_tod
        ];
    }
}
