<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Reports;

class ReportController extends Controller
{

    public function showIndex()
    {
        return view('home');
    }



    public function showArray()
    {
        return view('array', compact('array'));
    }

    public function index(){
        $reports= Report::all();
        return view('report.index', compact('reports'));
    }
}
