<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\User;
use App\Models\Skill;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->count(10)->create();
        Skill::factory()->count(10)->create();
        Book::factory()->count(10)->create();
        Purchase::factory()->count(10)->create();
        Product::factory()->count(10)->create();
    }
}
