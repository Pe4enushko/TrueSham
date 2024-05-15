<?php

namespace Database\Factories;

use App\Models\Dish;
use App\Models\MenuType;
use App\Models\Month;
use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'dish_id' => Dish::get()->random()->id,
            'month_id' => Month::get()->random()->id,
            'menu_date' => $this->faker->dateTimeThisYear(),
            'menu_type_id' => MenuType::get()->random()->id,
            'dish_count' => $this->faker->numberBetween(1,3)
        ];
    }
}
