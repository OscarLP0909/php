@extends('layouts/layout')
@section('title', 'Ejercicio 2 - Listado')
@section('content')
    <section>
        <section class="max-w-2xl mx-auto mt-8">
            <div class="card bg-base-100 shadow">
                <div class="card-body">
                    <h1 class="text-3xl font-bold">Listado de 5 elementos</h1>
                    <ul class="">
                        @foreach ($items as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </section>
    </section>
    @include('components/footer')

@endsection