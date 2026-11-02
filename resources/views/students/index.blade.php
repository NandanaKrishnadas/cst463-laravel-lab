
@extends('layouts.app')

@section('content')

<h2>Students List</h2>

@if (session('status'))
    <p style="color: green;">
        {{ session('status') }}
    </p>
@endif

<a href="{{ route('students.create') }}">Add Student</a>

@foreach ($students as $student)
    <p>
        {{ $student->roll_no }} -
        {{ $student->name }}
        <a href="{{ route('students.show', $student->id) }}">
            View
        </a>
    </p>
@endforeach

@endsection
