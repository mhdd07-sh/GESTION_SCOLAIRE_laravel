
@extends('_header')
@section('title', 'Add New Student')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Add New Student</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            @include('students._formstudent')
        </form>
    </div>
    @endsection
</body>
</html>