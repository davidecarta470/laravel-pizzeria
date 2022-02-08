<?php

use App\Size;
use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
   /**
    * Run the database seeds.
    *
    * @return void
    */
   public function run()
   {
      $sizes = ['baby', 'normale', 'gigante', 'al metro'];

      foreach ($sizes as $size) {

         $new_size = new Size();
         $new_size->name = $size;
         $new_size->save();
         
      }

   }
}
