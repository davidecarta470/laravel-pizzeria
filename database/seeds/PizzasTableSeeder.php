<?php

use Faker\Generator as Faker;
use App\Pizza;
use Illuminate\Database\Seeder;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $pizze = [
            [
                'name' => 'margherita',
                'ingredients' => 'pomodoro|mozzarella|',
                'price' => 5.00,
                
            ],
            [
                'name' => 'capricciosa',
                'ingredients' => 'pomodoro|mozzarella|funghi|prosciutto',
                'price' => 6.00
            ],
            [
                'name' => 'marinara',
                'ingredients' => 'pomodoro|origano',
                'price' => 5.50
            ],
            [
                'name' => 'boscaiola',
                'ingredients' => 'pomodoro|mozzarella|salsiccia|funghi',
                'price' => 7.00
            ],
            [
                'name' => 'diavola',
                'ingredients' => 'pomodoro|mozzarella|salame',
                'price' => 6.50
            ],
            [
                'name' => 'bianca',
                'ingredients' => 'mozzarella',
                'price' => 4.00
            ]
        ];

        foreach ($pizze as $pizza){
            $new_pizza = new Pizza();

            $new_pizza->name = $pizza['name'];
            $new_pizza->ingredients = $pizza['ingredients'];
            $new_pizza->price = $pizza['price'];$new_pizza->description = $faker->text(100);

            $new_pizza->save();
        }
    }
}
