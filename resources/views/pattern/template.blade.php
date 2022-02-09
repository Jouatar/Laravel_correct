@extends("base")
@section("body")
<body class="antialiased">
    <h1>Template</h1>
    <p>
    {{$tp1->getText()}}<br>
    {{$tp2->getText()}}<br>
    </p>
    <a href="{{ url()->previous() }}">Back</a>
</body>
@stop