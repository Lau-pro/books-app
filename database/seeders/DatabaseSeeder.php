<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\book;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(count: 1)->create();
    }
}
