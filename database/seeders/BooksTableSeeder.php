<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Book::create([
                'name' => $faker->sentence(3),
                'author' => $faker->name,
                'category' => $faker->word,
                'year' => $faker->year,
                'quantity' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
