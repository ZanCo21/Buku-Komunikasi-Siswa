<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class GuruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');


        for($i=1; $i <=10; $i++){
            DB::table('guru')->insert([
            'name' => $faker->name,
            'nik' => $faker->numberBetween(1000,2000),
            'mapel' => $faker->jobTitle,
        ]);

        }


    }
}
