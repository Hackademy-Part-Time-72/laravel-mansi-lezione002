<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        return view('welcome');
        //modificato
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {
        $services = ['siti', 'marketing', 'consulenza', 'ecommerce', 'hosting'];

        return view('services', ['services' => $services]);
    }

    public function service($name)
    {
        $services = ['siti', 'marketing', 'consulenza', 'ecommerce', 'hosting'];
        foreach ($services as $service) {
            if ($service == $name) {
                return view('service', ['service' => $name]);
            }
        }
        abort(404);
    }
}
