<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public static $services = ['siti', 'marketing', 'consulenza', 'ecommerce', 'hosting'];

    public function homepage()
    {
        //root=resources/views/
        //welcome
        //extension = .blade.php
        return view('welcome');
        //modificato
    }

    public function about()
    {
        return view('about');
    }

    public function services()
    {

        return view('services', ['services' => self::$services]);
    }

    public function service($name)
    {

        foreach (self::$services as $service) {
            if ($service == $name) {
                return view('service', ['service' => $name]);
            }
        }
        abort(404);
    }
}
