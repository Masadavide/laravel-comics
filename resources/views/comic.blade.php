@extends('layouts.app')

{{-- @section('page-title','Home Page') --}}

@section('main-content')
    @foreach ($comics as $key => $value)
    <div class="box">
        <img src="{{$value['thumb']}}" alt="">
        <h3>
            {{$value['series']}}
        </h3>
    </div>
    @endforeach
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
