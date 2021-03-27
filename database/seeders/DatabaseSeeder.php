<?php

namespace Database\Seeders;

use App\Models\Post;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(11)->create();

            /*

            for($i=0; $i<10; $i++){
                DB::table('products')->insert([
                    'product_name' => Str::random(10),
                    'product_desc' => Str::random(10),
                    'product_price' => Str::random(6),
                    'product_img' => Str::random(10),
                    'product_brand' => Str::random(6),
                ]);
            }

            */

        //Post::factory()->times(100)->create();  // juhul kui tahad otse databaseseederist seedida pead lisama ka use App\Models\Post;


        $this->call(ProductSeeder::class);

    }

   
}
