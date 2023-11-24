@extends('layout.main')
@section('content')
<h1>new comic</h1>

<form action="{{route('comics.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Comic Title</label>
        <input type="text" class="form-control" id="title" name="title" >
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Comic Description</label>
        <textarea type="text" class="form-control" id="description" name="description" rows="3">
        </textarea>
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Comic Picture Link</label>
        <input type="text" class="form-control" id="thumb" name="thumb" >
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Comic Price</label>
        <input type="text" class="form-control" id="price" name="price" >
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Comic Series</label>
        <input type="text" class="form-control" id="series" name="series" >
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Comic Release Date</label>
        <input type="text" class="form-control" id="sale_date" name="sale_date" >
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Comic Type</label>
        <input type="text" class="form-control" id="type" name="type" >
    </div>
    <div class="mb-3">
        <label for="artists" class="form-label">Comic Artists</label>
        <input type="text" class="form-control" id="artists" name="artists" >
    </div>
    <div class="mb-3">
        <label for="writers" class="form-label">Comic Writers</label>
        <input type="text" class="form-control" id="writers" name="writers" >
    </div>
    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-warning"> Submit</button>
        <button type="reset" class="btn btn-danger"> Reset</button>
    </div>

</form>
@endsection
