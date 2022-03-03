@extends('layouts.app')

@section('page-title','Home Page')

@section('content')
    {{-- <div class="prodotti">
        <div class="container">
            <h1>Tutti i prodotti</h1>
            @foreach ($comics as $indice => $comics)
            <div class="card">
                <img src="{{$comics['src']}}" >
                <div class="overlay">
                    {{ $comics['titolo'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
@endsection
