<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\SharedManager;
use Database\Factories\ManagerFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ManagerSeeder::class,
            RoleSeeder::class,
        ]);


        SharedManager::create([
            'id_user' => 1,
            'id_manager' => 1,
            'id_role' => 1,
        ]);

        SharedManager::create([
            'id_user' => 2,
            'id_manager' => 1,
            'id_role' => 2,
        ]);
    }
}
