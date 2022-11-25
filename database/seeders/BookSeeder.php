<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        for($i=1;$i<=7;$i++) {
            DB::table('books')->insert([
                'publisher_id' => $faker->numberBetween(1, 2),
                'title' => 'Title '.$i,
                'author' => $faker->name,
                'year' => $faker->numberBetween(2017, 2022),
                'synopsis' => 'Lorep Ipsum '.$i,
                'image' => 'dummy.webp'
            ]);
        }
    }
}
