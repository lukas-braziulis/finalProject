@if(Auth::check())
    @if((auth()->user()->id == 1))
        <div class="d-flex justify-content-end" style="margin-bottom: 2rem">
            <a href="{{route('movies.create')}}" type="button" class="btn btn-outline-success">Add a movie</a>
        </div>
    @endif
@endif
