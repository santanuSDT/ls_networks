<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::create([
            'first_name' => 'Person-1',
            'last_name' => 'title',
            'email' => 'person1@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        Person::create([
            'first_name' => 'Person-2',
            'last_name' => 'title',
            'email' => 'person2@gmail.com',
            'password' => bcrypt('123456789'),
        ]);

        Person::create([
            'first_name' => 'Person-3',
            'last_name' => 'title',
            'email' => 'person3@gmail.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}
