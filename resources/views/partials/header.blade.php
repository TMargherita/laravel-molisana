<header>
    <div class="logo">
        <img  src="{{asset('img/marchio-sito.png')}}" alt="Logo">
    </div>
    <nav class="main-nav">
       <ul class="main-nav-list">
          <li><a href={{route('home')}}>Home</a></li>
          <li><a class="active" href={{route('prodotti')}}>Prodotti</a></li>
          <li><a href={{route('news')}}>News</a></li>
        </ul> 
    </nav>
</header>