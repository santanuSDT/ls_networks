<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'post_content' => '1st post of person-1',
            'person_id' => 1
        ]);

        Post::create([
            'post_content' => '2nd post of person-1',
            'person_id' => 1
        ]);

        Post::create([
            'post_content' => '1st post of person-2',
            'person_id' => 2
        ]);

        Post::create([
            'post_content' => '1st post of page-1 of person-1',
            'person_id' => 1,
            'page_id' => 1,
            'is_page_post' => 1
        ]);
    }
}
