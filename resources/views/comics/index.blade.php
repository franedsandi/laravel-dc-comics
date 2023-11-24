@extends('layout.main')
@section('content')
<h1>Comics</h1>
@foreach ($comics as $comic)
<div class="card mt-4">
    <div class="card-header">
      {{$comic->title}}
    </div>
    <div class="card-body">
        <div class="maininfo d-flex">
            <p class="card-text">{{$comic->description}}</p>
            <img src="{{$comic->thumb}}" class="col-4" alt="{{$comic->title}}">
        </div>
        <p>Price:{{$comic->price}}</p>
        <p>Series:{{$comic->series}}</p>
        <p>Releazed on: {{$comic->sale_date}}</p>
        @include('partials.info')
    </div>
</div>
@endforeach
{{$comics->links()}}

@endsection
