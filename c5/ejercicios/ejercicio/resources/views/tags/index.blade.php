@extends('layout.main')
@section('title', 'Lista de tags')
@section('content')
    <div class="container mx-auto px-4 justify-center">
        <h1 class="text-2xl font-bold mb-4">Lista de Tags</h1>
        <a href="{{ route('tags.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 inline-block">Agregar Tag</a>
        <a href="{{ route('juegos.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline mt-4 inline-block">Volver a juegos</a>
    </div>
    <ul class="list-disc pl-5 mt-4">
        @foreach ($tags as $tag)
            <li class="list-item">{{ $tag->name }}</li>
            <form action="{{ route('tags.destroy', $tag) }}" method="POST" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded focus:outline-none focus:shadow-outline">Eliminar</button>
            </form>
        @endforeach
    </ul>
@endsection