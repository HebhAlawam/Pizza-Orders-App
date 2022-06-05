<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pizza;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Pizza::create([
            'name' => ' Neapolitan Pizza',
            'description' => 'Neapolitan is the original pizza. This delicious pie dates all the way back to 18th century in Naples, Italy. ',
            'small_pizza_price' => '11',
            'medium_pizza_price' => '22',
            'big_pizza_price' => '33',
            'category' => 'nonvegetarian' ,
            'image' => 'public/pizza/iQJA5O3gytctLI2VkPkYye3vdO5Vi0cmPhTLrVXu.jpg'
        ]);
        Pizza::create([
            'name' => 'New York-Style Pizza',
            'description' => 'With its characteristic large, foldable slices and crispy outer crust, New York-style pizza is one of America’s most famous regional pizza types.',
            'small_pizza_price' => '22',
            'medium_pizza_price' => '33',
            'big_pizza_price' => '44',
            'category' => 'vegetarian' ,
            'image' => 'public/pizza/naB9Qz5WWgNlAbxxeuxmjXKFgtUkkGcA2Iiy6ouY.jpg'
        ]);

    }
}
