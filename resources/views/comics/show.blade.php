@extends('layout.main')
@section('content')
<div class="d-flex flex-column align-items-center ">
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}" style="width: 90%">
    <p class=" fs-4 align-self-start">{{$comic->description}}</p>
    <p class=" fs-5">Price:{{$comic->price}}</p>
    <p class=" fs-5">Series:{{$comic->series}}</p>
    <p class=" fs-6 align-self-start">Writted By: {{$comic->writers}}</p>
    <p class=" fs-6 align-self-start">Designed By: {{$comic->artists}}</p>
    <div class="botons d-flex gap-3">
        @include('partials.edit_boton')
        @include('partials.delete_boton')
    </div>

</div>
@endsection
