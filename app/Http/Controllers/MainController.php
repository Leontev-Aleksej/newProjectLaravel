<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        return view('home');
    }



    public function showArray()
    {
        $array = [
            ['id' => 1, 'title' => 'картина 1', 'price' => 500, 'path' => 'img/art.jpg'],
            ['id' => 2, 'title' => 'картина 2', 'price' => 300, 'path' => 'img/art.jpg'],
            ['id' => 3, 'title' => 'картина 3', 'price' => 700, 'path' => 'img/art.jpg'],
            ['id' => 1, 'title' => 'картина 4', 'price' => 500, 'path' => 'img/art.jpg'],
            ['id' => 2, 'title' => 'картина 5', 'price' => 300, 'path' => 'img/art.jpg'],
            ['id' => 3, 'title' => 'картина 6', 'price' => 700, 'path' => 'img/art.jpg'],
        ];

        return view('home', compact('array'));
    }
}
