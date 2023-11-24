@extends('layout.main')
@section('content')
<h1>Comics</h1>
@if (session('deleted'))
    <div class="alert alert-success" role="alert">
        {{session('deleted')}}
    </div>
@endif


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
        <div class="botons d-flex gap-3">
            @include('partials.info_boton')
            @include('partials.edit_boton')
            @include('partials.delete_boton')
        </div>
    </div>
</div>
@endforeach
{{$comics->links()}}

@endsection
