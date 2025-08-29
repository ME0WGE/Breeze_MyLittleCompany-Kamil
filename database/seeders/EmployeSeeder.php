<?php

namespace Database\Seeders;

use App\Models\Employe;
use App\Models\Profil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeSeeder extends Seeder
{
   
    public function run(): void
    {
        Employe::factory(12)->has(Profil::factory())->create();
    }
}
