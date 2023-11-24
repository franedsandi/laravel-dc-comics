@extends('layout.main')
@section('content')
<h1>Modify the comic information of {{$comic->title}}</h1>

<form action="{{route('comics.update', $comic)}}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Comic Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" >
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Comic Description</label>
        <textarea type="text" class="form-control" id="description" name="description" rows="3">{{$comic->description}}
        </textarea>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Comic Picture Link</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}" >
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Comic Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Comic Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Comic Release Date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Comic Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}">
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label">Comic Artists</label>
        <input type="text" class="form-control" id="artists" name="artists" value="{{$comic->artists}}">
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Comic Writers</label>
        <input type="text" class="form-control" id="writers" name="writers" value="{{$comic->writers}}">
    </div>
    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-warning"> Submit</button>
        <button type="reset" class="btn btn-danger"> Reset</button>
    </div>

</form>
@endsection
