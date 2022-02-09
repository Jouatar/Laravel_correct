@extends("base")
@section("body")
<body class="antialiased">
    <h1>Template</h1>
    <p>
    {{$tp1->getText()}}<br>
    {{$tp2->getText()}}<br>
    Ce résultat ne méritrait pas un point bonus ? À bon entendeur.
    </p>
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop