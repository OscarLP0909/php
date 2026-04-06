@extends('layout.main')
@section('title', 'Editar juego')
@section('content')
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-bold mb-4">Editar juego</h1>
        <form action="{{ route('juegos.update', $juego) }}" method="POST" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                <input type="text" name="name" id="name" value="{{ $juego->name }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                <textarea name="description" id="description" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ $juego->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="release_year" class="block text-gray-700 text-sm font-bold mb-2">Fecha de Lanzamiento:</label>
                <input type="number" name="release_year" id="release_year" value="{{ $juego->release_year }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
            </div>
            <div class="mb-4">
                <label for="tags" class="block text-gray-700 text-sm font-bold mb-2">Tags:</label>
                @php
                    $selectedTags = collect($juego->tags ?? [])->map(fn($id) => (string) $id)->all();
                @endphp
                <select name="tags[]" id="tags" multiple class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}" @selected(in_array((string) $tag->id, $selectedTags, true))>{{ $tag->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="flex items-center justify-between mt-4">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Guardar cambios</button>
                <a href="{{ route('juegos.index') }}" class="text-gray-700 hover:text-gray-900 font-semibold">Volver a juegos</a>
            </div>
        </form>
    </div>
@endsection