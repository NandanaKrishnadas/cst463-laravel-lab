<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();

        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        
    $student = Student::create([
        'roll_no' => $request->roll_no,
        'name' => $request->name,
        'email' => $request->email,
        'department' => $request->department,
        'semester' => $request->semester,
        'cgpa' => $request->cgpa,
    ]);

    return redirect()
        ->route('students.show', $student)
        ->with('status', 'Student saved successfully!');

    }
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
