<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 
    public function run()
    {
        $faker = Faker::create();

        // Inserta 10 productos aleatorios
        for ($i = 0; $i < 10; $i++) {
            DB::table('productos')->insert([
                'status' => $faker->sentence(3),
                'name' => $faker->sentence(3), // Nombre aleatorio
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
