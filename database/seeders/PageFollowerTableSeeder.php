<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PageFollower;

class PageFollowerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PageFollower::create([
            'followed_page_id' => 1,
            'follower_user_id' => 3
        ]);
    }
}
