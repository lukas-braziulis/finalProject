@if(Auth::check())
    @if((auth()->user()->id == 1))
        <div class="d-flex justify-content-end" style="margin-bottom: 2rem">
            <a href="{{url('directors/create')}}" type="button" class="btn btn-outline-success">Add a Director</a>
        </div>
    @endif
@endif
