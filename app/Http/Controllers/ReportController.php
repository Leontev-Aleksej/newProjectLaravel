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
        $data = $request->validate([
            'description' => 'text',
          ]);
          $data['number'] = uniqid();
          $report->create($data);
          return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
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
