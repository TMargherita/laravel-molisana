@extends('layouts.main')

@php
  $data = config('pasta');

    $lunga = [];
    $corta = [];
    $cortissima = [];

    foreach ($data as $key => $prodotto) {
        $prodotto["id"] = $key;
        if ($prodotto["tipo"] == "lunga") {
            $lunga[] = $prodotto;
        }elseif ($prodotto["tipo"] == "corta") {
            $corta[] = $prodotto;
        }elseif ($prodotto["tipo"] == "cortissima") {
            $cortissima[] = $prodotto;
        }
    }

@endphp


@section('title')
    La Molisana - Sito Ufficiale
@endsection

@section('mainContent')
    
  @if(!empty($lunga))
      <h2>Le Lunghe</h2>
      <ul>
          @foreach ($lunga as $key => $prodotto)
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
          @foreach ($corta as $key => $prodotto)
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
          @foreach ($cortissima as $key => $prodotto)
              <li>
                  <img src="{{$prodotto["src"]}}" alt="">
                  <a href="prodotti/show/{{$prodotto["id"]}}"><h3>{{$prodotto["titolo"]}}</h3></a>
              </li>
          @endforeach
      </ul>
  @endif
@endsection
    @include('partials.footer')
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>