<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex()
    {
        // Возвращаем вид home
        return view('home');
    }



    public function showArray()
    {
        // Создаем двумерный массив из ассоциативных массивов
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => 'img/1.jpg'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 300, 'path' => 'img/2.jpg'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 700, 'path' => 'img/3.jpg'],
            // Добавьте другие продукты по необходимости
        ];

        // Возвращаем вид home с массивом
        return view('home', compact('array'));
    }
}
