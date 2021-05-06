@extends('layout.molisana')

@dump($paste)

@section('titolo_pagina', 'Prodotti')

@section('content')
    <div class="wrap-cards">
        @foreach ($paste as $pasta)
            <div class="card">
                <img src="{{ $pasta['src'] }}" alt="">
                <div class="overlay">
                    <h1>{{ $pasta['titolo'] }}</h1>
                    <h1>_</h1>
            </div>  
        @endforeach

    </div>
@endsection