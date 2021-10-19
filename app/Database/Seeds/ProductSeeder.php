<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $data = [
        	[
        		'name' => 'Gelas',
        		'price' => 19900,
        		'stock' => 1000
        	],
        	[
        		'name' => 'Piring',
        		'price' => 29900,
        		'stock' => 1000
        	]
        ];

        $this->db->table('products')->insertBatch($data);
    }
}
