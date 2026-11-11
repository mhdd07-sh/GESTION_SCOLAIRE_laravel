@extends('_header')
@section('title', 'Edit Student')
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Student</h1>
        <form action="{{ route('students.update', $student) }}" method="POST">
            @csrf
            @method('PUT')
            @include('students._formstudent')
        </form>
    </div>
@endsection
