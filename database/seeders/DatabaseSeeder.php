<?php

namespace Database\Seeders;

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
        $this->call([
            PersonsTableSeeder::class,
            PageTableSeeder::class,
            PostTableSeeder::class,
            FollowTableSeeder::class,
            PageFollowerTableSeeder::class,
        ]);
    }
}
