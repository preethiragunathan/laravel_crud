@extends('layouts.layout')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Student ID:</label>
        <input type="number" min="0" name="student_id" value="{{ $student->student_id }}" required>
        <label>Name:</label>
        <input type="text" name="name" value="{{ $student->name }}" required>
        <button type="submit">Update</button>
    </form>
@endsection
