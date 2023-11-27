@extends('layout.main')
@section('content')
<h1>Add a New Comic</h1>
@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Comic Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" >
        @error('title')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Comic Description</label>
        <textarea type="text" class="form-control" id="description" name="description" rows="3" >{{old('description')}}
        </textarea>
        @error('description')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Comic Picture Link</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
        @error('thumb')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Comic Price</label>
        <input type="text" class="form-control" id="price" name="price" value="{{old('price')}}">
        @error('price')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Comic Series</label>
        <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
        @error('series')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Comic Release Date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        @error('sale_date')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Comic Type</label>
        <input type="text" class="form-control" id="type" name="type" value="{{old('type')}}">
        @error('type')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label">Comic Artists</label>
        <input type="text" class="form-control" id="artists" name="artists" value="{{old('artists')}}">
        @error('artists')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Comic Writers</label>
        <input type="text" class="form-control" id="writers" name="writers" value="{{old('writers')}}">
        @error('writers')
        <p class="text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-warning"> Submit</button>
        <button type="reset" class="btn btn-danger"> Reset</button>
    </div>

</form>
@endsection
