<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $reports= Report::all();
        return view('report.index', compact('reports'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Report $report)
    {
        $request->validate([
            'number' => 'required',
            'description' => 'required',
          ]);

          Report::create($request->all());
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('report.show', compact('report'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'number' => 'required',
            'description' => 'required',
        ]);

        Report::update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        $report -> delete();
        return redirect()->back();
    }
}
