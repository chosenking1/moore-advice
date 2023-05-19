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
       

        // Product::factory()->count(10)->create();
        Product::create([
            'product_name' => 'Product 1',
            'description' => 'Description for Product 1',
            'price' => 10
        ]);

        Product::create([
            'product_name' => 'Product 2',
            'description' => 'Description for Product 2',
            'price' => 20
        ]);

        Product::create([
            'product_name' => 'Product 3',
            'description' => 'Description for Product 3',
            'price' => 30
        ]);
    }
    }

