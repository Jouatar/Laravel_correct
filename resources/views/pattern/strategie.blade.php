@extends("base")
@section("body")
<body class="antialiased">
    <h1>Stratégie</h1>
    <p>
    Renaud HT {{ $vr->getPrix() }}€ : TTC {{ $flr->getMontant() }}€<br>
    Opel HT {{ $vo->getPrix() }}€ : TTC {{ $flo->getMontant() }}€
    </p>
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop