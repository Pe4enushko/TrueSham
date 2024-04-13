<?php

namespace Database\Seeders;

use App\Models\Month;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $cl = \App\Models\Dish::class;

//        $cl::query()->delete();
        $cl::factory(50)->create();

//        \App\Models\MenuType::query()->delete();
//        \App\Models\MenuType::factory(9)->create();
    }
}
