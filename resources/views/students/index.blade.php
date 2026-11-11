@extends('_header')
@section('title', 'Students List')
@section('content')
    <div class="container mt-5">
    @if($students->isEmpty())
        <div class="container mt-5">
            <div class="alert alert-info" role="alert">
                No students found. <a href="{{ route('students.create') }}" class="alert-link">Add a new student</a>.
            </div>
        </div>
    @else
        <div class="container mt-5">
            <h1 class="mb-4">Students List</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Birth Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->nom }} {{ $student->prenom }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->date_naissance }}</td>
                            <td>
                                <a href="{{ route('students.show', $student) }}" class="btn btn-info btn-sm">View</a>
                                <a href="{{ route('students.edit', $student) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('students.destroy', $student) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</div>
    @endsection
</body>
</html>