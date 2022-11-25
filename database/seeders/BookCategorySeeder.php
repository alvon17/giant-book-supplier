<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use Illuminate\Support\Facades\DB;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = faker::create();
        for($i=1;$i<=5;$i++) {
            DB::table('books_categories')->insert([
                'book_id' => $faker->unique(true)->numberBetween(1, 7),
                'category_id' => 1
            ]);
        }
        for($i=1;$i<=5;$i++) {
            DB::table('books_categories')->insert([
                'book_id' => $faker->unique(true)->numberBetween(1, 7),
                'category_id' => 2
            ]);
        }
        for($i=1;$i<=5;$i++) {
            DB::table('books_categories')->insert([
                'book_id' => $faker->unique(true)->numberBetween(1, 7),
                'category_id' => 3
            ]);
        }
    }
}
