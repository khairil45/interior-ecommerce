<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'name'        => 'Produk A',
                'description' => 'Deskripsi untuk Produk A',
                'price'       => 99.99,
                'image_url'   => 'https://example.com/images/product_a.jpg',
                'stock'       => 10,
            ],
            [
                'name'        => 'Produk B',
                'description' => 'Deskripsi untuk Produk B',
                'price'       => 149.99,
                'image_url'   => 'https://example.com/images/product_b.jpg',
                'stock'       => 5,
            ],
            [
                'name'        => 'Produk C',
                'description' => 'Deskripsi untuk Produk C',
                'price'       => 199.99,
                'image_url'   => 'https://example.com/images/product_c.jpg',
                'stock'       => 7,
            ],
            [
                'name'        => 'Produk D',
                'description' => 'Deskripsi untuk Produk D',
                'price'       => 249.99,
                'image_url'   => 'https://example.com/images/product_d.jpg',
                'stock'       => 3,
            ],
            [
                'name'        => 'Produk E',
                'description' => 'Deskripsi untuk Produk E',
                'price'       => 299.99,
                'image_url'   => 'https://example.com/images/product_e.jpg',
                'stock'       => 8,
            ],
            [
                'name'        => 'Produk F',
                'description' => 'Deskripsi untuk Produk F',
                'price'       => 349.99,
                'image_url'   => 'https://example.com/images/product_f.jpg',
                'stock'       => 12,
            ],
            [
                'name'        => 'Produk G',
                'description' => 'Deskripsi untuk Produk G',
                'price'       => 399.99,
                'image_url'   => 'https://example.com/images/product_g.jpg',
                'stock'       => 6,
            ],
            [
                'name'        => 'Produk H',
                'description' => 'Deskripsi untuk Produk H',
                'price'       => 449.99,
                'image_url'   => 'https://example.com/images/product_h.jpg',
                'stock'       => 4,
            ],
            [
                'name'        => 'Produk I',
                'description' => 'Deskripsi untuk Produk I',
                'price'       => 499.99,
                'image_url'   => 'https://example.com/images/product_i.jpg',
                'stock'       => 9,
            ],
            [
                'name'        => 'Produk J',
                'description' => 'Deskripsi untuk Produk J',
                'price'       => 549.99,
                'image_url'   => 'https://example.com/images/product_j.jpg',
                'stock'       => 11,
            ]
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
