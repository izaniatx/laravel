<h2>Lista de Montanyas Ordenadas por altura</h2>
<ul>
    @foreach ($montanyas as $montanya)
        <li>{{ $montanya->nombre }} - {{ $montanya->altura }} m - {{ $montanya->continente }}</li>
    @endforeach
</ul>