<?php

namespace Database\Factories;

use App\Models\User as ModelsUser;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as Faker;

class UserFactory extends Factory
{
    protected $model = ModelsUser::class;

    public function definition(): array
    {
        $faker = Faker::create();

    	return [
            'username' => $faker->userName(),
            'password' => password_hash('12345', PASSWORD_BCRYPT),
    	];
    }
}
