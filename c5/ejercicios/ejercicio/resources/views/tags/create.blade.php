@extends('layout.main')
@section('title', 'Crear Tag')
@section('content')
    <div class="container mx-auto px-4 justify-center">
        <h1 class="text-2xl font-bold mb-4">Crear Tag</h1>
        <form action="{{ route('tags.store') }}" method="POST" class="w-full max-w-sm">
            @csrf
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre del Tag:</label>
                <input type="text" name="name" id="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="flex items-center gap-3">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar</button>
                <a href="{{ route('tags.index') }}" class="text-gray-700 hover:text-gray-900">Cancelar</a>
                <a href="{{ route('juegos.index') }}" class="text-gray-700 hover:text-gray-900">Volver a juegos</a>
            </div>
        </form>
    </div>
@endsection