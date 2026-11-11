@extends('_header')
@section('title', 'Student Details')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Student Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $student->nom }} {{ $student->prenom }}</h5>
                <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
                <p class="card-text"><strong>Date of Birth:</strong> {{ $student->date_naissance }}</p>
                <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>