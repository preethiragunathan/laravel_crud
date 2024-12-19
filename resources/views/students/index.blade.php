@extends('layouts.layout')

@section('content')
    <h1>Student List</h1>
    <a href="{{ route('students.create') }}">Add Student</a>
    <table border="1">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>
                        <a href="{{ route('students.edit', $student->id) }}">Edit</a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
