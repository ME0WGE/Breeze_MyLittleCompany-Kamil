<?php

namespace Database\Seeders;

use App\Models\Avatar;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\AvatarFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RoleSeeder::class);
        $this->call(ProductSeeder::class);
        $this->call([
            DepartmentSeeder::class, EmployeeSeeder::class
        ]);

        User::factory(3)->has(Avatar::factory())->create();

        User::factory()->has(Avatar::factory())->create([
            'name' => 'test_user',
            'email' => 'test@example.com',
            'username' => 'test_username'
        ]);
    }
}
