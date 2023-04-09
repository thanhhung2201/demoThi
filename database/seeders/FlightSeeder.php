<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker=Faker::create();
        for($i=0;$i<10;$i++)
        {
            DB::table('flights')->insert([
                'SoHieuChuyenBay'=>$faker->numberBetween(1000000,99999999),
                'SanBayKhoiHanh'=>$faker->city(),
                'SanBayDen'=>$faker->city(),
                'NgayGioKhoiHanh'=>$faker->dateTime(now()),
                'NgayGioDen'=>$faker->dateTime(now()),
                'SoDangKy'=>$faker->randomElement(DB::table('planes')->pluck('SoDangKy')->toArray()),
            ]);
        }
    }
}
