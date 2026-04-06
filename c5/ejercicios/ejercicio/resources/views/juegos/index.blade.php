@extends('layout.main')
@section('title', 'Lista de juegos')
@section('content')
    <div class="container mx-auto px-4 justify-center">
        <h1 class="text-2xl font-bold mb-4">Lista de juegos</h1>
        <a href="{{ route('juegos.crear') }}" method="POST" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4">Agregar juego</a>
    </div>
    <ul class="list-disc pl-5 mt-4">
        @foreach ($juegos as $juego)
            <li class="list-item">{{ $juego->name }} - {{ $juego->description }} - {{ $juego->release_year }}</li>
            <a href="{{ route('juegos.edit', $juego) }}" class="inline-block bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded focus:outline-none focus:shadow-outline">Editar</a>
            <form action="{{ route('juegos.delete', $juego) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded focus:outline-none focus:shadow-outline">Eliminar</button>
            </form>
        @endforeach
    </ul>
@endsection