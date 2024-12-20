<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Role extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ['name' => 'admin'],
            ['name' => 'user'],
            ['name' => 'editor'],
            ['name' => 'author'],
            ['name' => 'contributor'],
            ['name' => 'subscriber'],
        ];

        foreach ($roles as $role) {
            \App\Models\Role::create($role);
        }
    }
}
