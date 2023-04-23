<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        User::create([
            'username' => 'yuuwid',
            'password' => password_hash('12345', PASSWORD_BCRYPT),
        ]);

        User::create([
            'username' => $faker->userName(),
            'password' => password_hash('12345', PASSWORD_BCRYPT),
        ]);

    }
}
