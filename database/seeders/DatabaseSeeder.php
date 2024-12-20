<?php

namespace Database\Seeders;

use Database\Seeders\User; // Import the User seeder
use Database\Seeders\Role; // Import the Role seeder
use Database\Seeders\UserRole; // Import the UserRole seeder
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Role::class,
            User::class,
            UserRole::class,
        ]);
    }
}
