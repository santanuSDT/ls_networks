<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Follow;

class FollowTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Follow::create([
            'followed_user_id' => 2,
            'follower_user_id' => 3
        ]);
    }
}
