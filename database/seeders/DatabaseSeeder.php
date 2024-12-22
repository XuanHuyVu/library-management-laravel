<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            BooksTableSeeder::class,
            ReadersTableSeeder::class,
            BorrowsTableSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'Test',
            'email' => 'tests@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
