@extends('layouts/layout')
@section('title', 'Ejercicio 2 - Deportes')

@section('content')
    <section class="max-w-2xl mx-auto mt-8">
        <div class="card bg-base-100 shadow">
            <div class="card-body">
                <h1 class="text-3xl font-bold">Listado de Deportes</h1>
                <ul class="mt-3 list-disc pl-5">
                    @foreach ($sports as $sport)
                        <li>{{ $sport }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    @include('components/footer')
@endsection