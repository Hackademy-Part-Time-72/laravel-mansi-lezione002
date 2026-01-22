<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $products = [
        ['slug' => 'scarpa-nike', 'name' => 'Scarpa Nike', 'image' => ['/images/scarpa-nike.webp', '/images/nike_dunk.webp'], 'number' => 43],
        ['slug' => 'scarpa-adidas', 'name' => 'Scarpa Adidas', 'image' => ['https://picsum.photos/seed/ciao/200/300'], 'number' => 45],
        ['slug' => 'scarpa-umbro', 'name' => 'Scarpa Umbro', 'image' => ['https://picsum.photos/seed/sds/200/300'], 'number' => 32],
    ];

    public function products()
    {
        return view('products', ['products' => $this->products]);
    }

    public function product($name)
    {
        foreach ($this->products as $product) {
            if ($product['slug'] == $name) {
                //$product
                return view('profile', ['product' => $product]);
            }
        }
        abort(404);
    }
}
