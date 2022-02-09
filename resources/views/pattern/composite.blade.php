@extends("base")
@section("body")
<body class="antialiased">
    <h1>Composite</h1>
    <p>
    {{ $voiture->getPrixTotal() }}<br>
    {{ $usine->makeCar('renaud')->getPrixTotal() }}<br>
    {{ $usine->makeCar('opel')->getPrixTotal() }}<br>
    {{ $usine->makeCar('renaud')->getPrixTotal() }}<br>
    {{ $usine->makeCar('opel')->getPrixTotal() }}<br>
    {{ $usine->makeCar('opel')->getPrixTotal() }}<br>
    {{ $voiture->getPrixTotal() }}<br>
    </p>
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop