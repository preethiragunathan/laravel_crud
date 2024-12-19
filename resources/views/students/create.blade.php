@extends('layouts.layout')

@section('content')
    <h1>Add Student</h1>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Student ID:</label>
        <input type="number" min="0" name="student_id" required>
        <label>Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Add</button>
    </form>
@endsection
