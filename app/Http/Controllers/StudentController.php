<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        //
    }

    public function login(Request $request) {
        $request->validate([
           'nisn' => 'required',
           'password' => 'required',
        ]);

        $student = Student::where('nisn', $request->nisn)->first();
        if (!$student) {
            return response()->json(['message' => 'nisn tidak ditemukan'], 404);
        }
        else {
            if (Auth::attempt(['nisn' => $request->nisn, 'password' => $request->password])) {
                return response()->json(['message' => 'success', 'student' => Student::where('nisn', $request->nisn)->first()], 200);
            }
            else {
                return response()->json(['message' => 'password gagal'], 401);
            }
        }
    }
}
