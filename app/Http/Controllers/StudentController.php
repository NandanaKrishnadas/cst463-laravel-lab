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
        $request->validate([
            'roll_no' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'department' => 'required',
            'semester' => 'required|integer',
            'cgpa' => 'required|numeric',
        ]);

        Student::create($request->only([
            'roll_no',
            'name',
            'email',
            'department',
            'semester',
            'cgpa'
        ]));

        return redirect()
            ->route('students.index')
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
