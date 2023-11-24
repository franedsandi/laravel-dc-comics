@extends('layout.main')
@section('content')
<h1>Home</h1>
<p>Oggi abbiamo {{$num_comics}} comics</p>
<a href="{{Route('comics.create')}}" class="btn btn-secondary">Aggiungi un nuovo comic</a>
@endsection
