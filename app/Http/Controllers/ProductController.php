<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $products = [
            ['slug' => 'scarpa-nike', 'name' => 'Scarpa nike', 'image' => '', 'number' => 42],
            ['slug' => 'scarpa-adidas', 'name' => 'Scarpa Adidas', 'image' => '', 'number' => 45],
            ['slug' => 'scarpa-umbro', 'name' => 'Scarpa Umbro', 'image' => '', 'number' => 32],
        ];
        return view('products', ['products' => $products]);
    }

    public function product($name)
    {
        $products = [
            ['slug' => 'scarpa-nike', 'name' => 'Scarpa nike', 'image' => ['/images/scarpa-nike.webp', '/images/scarpa-nike.webp'], 'number' => 42],
            ['slug' => 'scarpa-adidas', 'name' => 'Scarpa Nike', 'image' => ['https://picsum.photos/seed/ciao/200/300'], 'number' => 45],
            ['slug' => 'scarpa-umbro', 'name' => 'Scarpa Umbro', 'image' => ['https://picsum.photos/seed/sds/200/300'], 'number' => 32],
        ];

        foreach ($products as $product) {
            if ($product['slug'] == $name) {
                //$product
                return view('profile', ['product' => $product]);
            }
        }
        abort(404);
    }
}
