<h1>Coleccion A</h1>
<ul>
    @foreach ($coleccionA as $montanya)
        <li>{{ $montanya->nombre }} - {{ $montanya->altura }} m - {{ $montanya->continente }}</li>
    @endforeach
</ul>

<h2>Coleccion B</h2>
<ul>
    @foreach ($coleccionB as $montanya)
        <li>{{ $montanya->nombre }} - {{ $montanya->altura }} m - {{ $montanya->continente }}</li>
    @endforeach
</ul>