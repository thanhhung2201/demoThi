<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();
        for($i=0;$i<10;$i++)
        {
            DB::table('books')->insert([
                'SoHieuChuyenBay'=>$faker->randomElement(DB::table('flights')->pluck('SoHieuChuyenBay')->toArray()),
                'Email'=>$faker->randomElement(DB::table('passengers')->pluck('Email')->toArray()),
            ]);
        }

    }
}
