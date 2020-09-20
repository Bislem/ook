<?php

namespace Database\Seeders;

use App\Models\categories;
use App\Models\portfolio;
use App\Models\posts;
use App\Models\postsTutorials;
use App\Models\services;
use App\Models\tutorials;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(30)->create();
        categories::factory(50)->create();
        posts::factory(50)->create();
        portfolio::factory(30)->create();
        services::factory(30)->create();
        tutorials::factory(30)->create();
        postsTutorials::factory(30)->create();
    }
}
