<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'title' => 'printer',
                'description' => '(un)Breakable Printer',
                'price' => 15.99,
                'image_url' => 'https://cdn.jsdelivr.net/gh/ME0WGE/assets-storage@main/assets/images/placeholders/printer_placeholder.png?v=2'
            ],
            [
                'title' => 'phone',
                'description' => 'Overpriced Phone',
                'price' => 159.99,
                'image_url' => 'https://cdn.jsdelivr.net/gh/ME0WGE/assets-storage@main/assets/images/placeholders/phone_placeholder.jpg?v=2'
            ],
            [
                'title' => 'computer',
                'description' => 'PC Master Race',
                'price' => 350.99,
                'image_url' => 'https://cdn.jsdelivr.net/gh/ME0WGE/assets-storage@main/assets/images/placeholders/computer_placeholder.jpg?v=2'
            ],
            [
                'title' => 'ventilator',
                'description' => 'Makes your voice sound funny when you talk near to it',
                'price' => 11.99,
                'image_url' => 'https://cdn.jsdelivr.net/gh/ME0WGE/assets-storage@main/assets/images/placeholders/ventilator_placeholder.jpeg?v=2'
            ],
        ]);
    }
}
