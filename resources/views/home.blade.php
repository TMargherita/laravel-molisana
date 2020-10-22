@extends('layouts.main')



@section('title')
    La Molisana - Sito Ufficiale
@endsection

@section('mainContent')
    
  @if(!empty($lunga))
      <h2>Le Lunghe</h2>
      <ul>
          @foreach ($lunga as $prodotto)
              <li>
                  <img src="{{$prodotto["src"]}}" alt="">
                  <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto["titolo"]}}</h3></a>
              </li>
          @endforeach
      </ul>
  @endif

  @if(!empty($corta))
      <h2>Le Corte</h2>
      <ul>
          @foreach ($corta as $prodotto)
              <li>
                  <img src="{{$prodotto["src"]}}" alt="">
                  <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto["titolo"]}}</h3> 
              </li>
          @endforeach
      </ul>
  @endif

  @if(!empty($cortissima))
      <h2>Le Cortissime</h2>
      <ul>
          @foreach ($cortissima as $prodotto)
              <li>
                  <img src="{{$prodotto["src"]}}" alt="">
                  <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto["titolo"]}}</h3></a>
              </li>
          @endforeach
      </ul>
  @endif
@endsection
