<header class="bg-white">

    <div id="logo" class="text-center">
        <a href="{{route('products.index')}}"><img src="{{ Vite::asset('resources/img/logo.png') }}" alt="logo molisana"></a>
    </div>
    <div class="container" >
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('products.index')}}">Prodotti</a>
        <a href="{{route('products.create')}}">Aggiungi la tua pasta</a>
    </div>

</header>