<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = new Producto;
        $product -> name = "Chocorramo";
        $product -> price = "4000";
        $product -> description = "Ramo";
        $product -> available = true;

        $product -> save();
    }
}