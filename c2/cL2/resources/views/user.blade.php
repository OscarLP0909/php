@extends('layouts/layout')
@section('title', 'Ejercicio 2 - Usuario')

@section('content')
    <section class="max-w-2xl mx-auto mt-8">
        <div class="card bg-base-100 shadow">
            <div class="card-body">
                <h1 class="text-3xl font-bold">Listado de Usuario</h1>
                <p class="mt-3">El ID es {{ $id }}</p>
            </div>
        </div>
    </section>
    @include('components/footer')
@endsection