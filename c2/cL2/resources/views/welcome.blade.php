@extends('layouts/layout')
@section('title', 'Ejercicio 2')
@section('content')
    <section class="max-w-2xl mx-auto mt-8">
        <div class="card bg-base-100 shadow">
            <div class="card-body">
                <h1 class="text-3xl font-bold">Welcome</h1>
                <p class="mt-4 text-base-content/60">
                    Realizando ejercicios de la Tarea 2
                </p>
                <ul class="mt-4 list-disc pl-5">
                    @foreach ($links as $link)
                        <li>
                            <a class="text-blue-600 hover:underline" href="{{ $link['url'] }}">{{ $link['label'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    @include('components/footer')
@endsection