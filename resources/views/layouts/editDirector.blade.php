@if(Auth::check())
    @if((auth()->user()->id == 1))
        <div class="buttons-alignment">
            <div class="d-flex justify-content-start">
                <a href="{{route('directors.edit', $director->id)}}" type="button" class="btn btn-outline-warning">Edit</a>
            </div>
            <div class="d-flex justify-content-start">
                <a href="{{route('directors.delete',  $director->id)}}" type="button" class="btn btn-outline-danger">Delete</a>
            </div>
        </div>
    @endif
@endif
