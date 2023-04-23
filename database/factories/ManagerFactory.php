<?php

namespace Database\Factories;

use App\Models\Manager as ModelsManager;
use Illuminate\Database\Eloquent\Factories\Factory;

use Faker\Factory as Faker;

class ManagerFactory extends Factory
{
    protected $model = ModelsManager::class;

    function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function definition(): array
    {
        $faker = Faker::create();
        $name = $faker->userName();

        return [
            'manager_name' => $name,
            'token' => $this->generateRandomString(255),
            'security_pass' => password_hash($name, PASSWORD_BCRYPT),
        ];
    }
}
