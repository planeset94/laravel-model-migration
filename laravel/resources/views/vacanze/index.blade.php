@extends('layout.app')

@section('title', 'Home Page')

@section('content')
    <h1>Vacenze italiane</h1>
    @forelse ($vacanze as $vacanza)
        <h3>Destinazione: {{ $vacanza->destination }}</h3>
        <p>Mezzo di trasporto: {{ $vacanza->transport }}</p>
        <p>Prezzo pagato: {{ $vacanza->price }} euro</p>
        <p>Durata: {{ $vacanza->nOfDays }} giorni</p>
    @empty

    @endforelse

@endsection
