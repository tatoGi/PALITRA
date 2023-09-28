<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        // Clear existing records in the products table (optional)
        Products::truncate();

        // Define the seed data
        $seedData = [
            [
                'order' => 1,
                'title' => 'Product 1',
                'parent_id' => null,
            ],
            [
                'order' => 2,
                'title' => 'Product 2',
                'parent_id' => null,
            ],
            [
                'order' => 1,
                'title' => 'Subproduct 1',
                'parent_id' => 1,
            ],
            [
                'order' => 2,
                'title' => 'Subproduct 2',
                'parent_id' => 1,
            ],
            // Add more data with parent-child relationships
            [
                'order' => 1,
                'title' => 'Product 3',
                'parent_id' => null,
            ],
            [
                'order' => 1,
                'title' => 'Subproduct 3',
                'parent_id' => 3,
            ],
            [
                'order' => 2,
                'title' => 'Subproduct 4',
                'parent_id' => 3,
            ],
        ];

        // Insert seed data into the products table
        foreach ($seedData as $data) {
            Products::create($data);
        }
    }
}
