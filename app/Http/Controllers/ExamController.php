<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(String $classroom_id)
    {
        // Put all the exams to variable with specific classroom
        $exams = Exam::where('classroom_id', $classroom_id)->get();
        return response()->json(['exams' => $exams], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exam $exam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        //
    }

    public function kumpulUjian(Request $request) {
        print($request->all());

        return response()->json(['success' => true], 200);
    }
}
