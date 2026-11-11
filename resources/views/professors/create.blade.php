@extends('_header_professor')

@section('title', 'Ajouter un professeur')

@section('content')

<div class="container mt-5">

    <h1 class="mb-4">Ajouter un professeur</h1>

    <form action="{{ route('professors.store') }}" method="POST">

        @csrf

        @include('professors._form')

    </form>

</div>

@endsection