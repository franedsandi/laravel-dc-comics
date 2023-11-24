<form
action="{{route('comics.destroy', $comic) }}"
method="Post"
onsubmit="return confirm('Are you sure you want to DELETE de information the comic named: {{$comic->title}}')">

    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash-can"></i></button>
</form>





