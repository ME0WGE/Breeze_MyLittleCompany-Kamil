<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{

    public function run(): void
    {
        Role::insert([
            ['name' => 'user'],
            ['name' => 'admin'],
            ['name' => 'modo'],
        ]);
    }
}
