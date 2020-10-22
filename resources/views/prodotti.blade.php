@extends('layouts.main')

@section('title')
    Prodotti
@endsection

@section('mainContent')
    <h1>I prodotti</h1>

    @if (!empty($paste))
     @foreach ($paste as $key => $tipoPasta)
        <h2>{{$key}}</h2>
        <ul>
            @foreach ($tipoPasta as $prodotto)
                <li>
                  <img src="{{$prodotto["src"]}}" alt="">
                  <a href="{{route('dettaglio-prodotto')}}"><h3>{{$prodotto["titolo"]}}</h3>
                </li>
            @endforeach
        </ul>
      @endforeach
    @endif

@endsection
