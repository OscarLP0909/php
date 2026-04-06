@extends('layout.main')
@section('title', 'Lista de juegos')
@section('content')
    <div class="container mx-auto px-4 justify-center">
        <h1 class="text-2xl font-bold mb-4">Lista de juegos</h1>
        <a href="{{ route('juegos.crear') }}" method="POST" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Agregar juego</a>
    </div>
    <ul class="list-disc pl-5 mt-4">
        @foreach ($juegos as $juego)
            <li class="list-item" href="{{ route('juegos.editar', $juego) }}">{{ $juego->name }} - {{ $juego->description }} - {{ $juego->release_year }}</li>
        @endforeach
    </ul>
@endsection