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
        $this->call(ProduitSeeder::class);

        User::factory(3)->has(Avatar::factory())->create();

        User::factory()->has(Avatar::factory())->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'pseudo' => 'TestPseudo'
        ]);

        $this->call([
               DepartementSeeder::class, EmployeSeeder::class, 
            ]);
        
    }
}
