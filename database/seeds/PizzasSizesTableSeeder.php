<?php

use App\Pizza;
use App\Size;
use Illuminate\Database\Seeder;

class PizzasSizesTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      for ($i=0; $i < 20; $i++) { 

         $pizza = Pizza::inRandomOrder()->first();

         $size = Size::inRandomOrder()->first();

         $pizza->sizes()->attach($size->id);
         
      }
   }
}
