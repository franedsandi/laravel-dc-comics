@extends('layout.main')
@section('content')
<div class="d-flex flex-column align-items-center ">
<h1>{{$comic->title}}</h1>
<img src="{{$comic->thumb}}" alt="{{$comic->title}}" style="width: 90%">
<p class=" fs-4">{{$comic->description}}</p>
<p class=" fs-5">Price:{{$comic->price}}</p>
<p class=" fs-5">Series:{{$comic->series}}</p>
<p class=" fs-5">Releazed on; {{$comic->sale_date}}</p>
</div>
@endsection
