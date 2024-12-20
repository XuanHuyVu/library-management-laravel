<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Reader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class BorrowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $books_id = Book::all()->pluck('id')->toArray();
        $readers_id = Reader::all()->pluck('id')->toArray();
        foreach (range(1, 30) as $index) {
            Borrow::create([
                'book_id' => $faker->randomElement($books_id),
                'reader_id' => $faker->randomElement($readers_id),
                'borrowed_date' => $faker->date(),
                'returned_date' => $faker->date(),
                'status' => $faker->randomElement(['borrowed', 'returned']),
            ]);
        }
    }
}
