<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=Faker::create();
        for($i=0;$i<10;$i++)
        {
            DB::table('passengers')->insert([
                'Ten'=>$faker->firstName(),
                'Ho'=>$faker->lastName(),
                'Email'=>$faker->unique()->email(),
            ]);
        }

    }
}
