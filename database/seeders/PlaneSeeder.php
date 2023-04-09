<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PlaneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create(); 
        for($i = 0; $i < 10; $i++){
            DB::table('planes')->insert([
                'SoDangKy' => $faker->unique()->numberBetween(1000000,9999999),
                'SoHieu' => $faker->name(),
                'KhaNang' => $faker->randomElement(['1','Nhieu']),
            ]);
        }

    }
}
