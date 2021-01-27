@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        <h4>Users Public Ablums</h4>
    @include('multiauth::message')

<div class="row">
    @if ($photos->count())
    @foreach ($photos as $photo)
      <div class="col-md-4">
        <div class="card">
        <img class="card-img-top" src="{{asset('storage/'.$photo->photo)}}" alt="Card image cap">

          <div class="card-body">
            <h3 class="card-title">{{$photo->user->name}}</h3>
            <p class="card-text">{{$photo->created_at}}</p>
            <a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $photo->id }}').submit();">Delete</a>
                <form id="delete-form-{{ $photo->id }}" action="{{ route('album.delete',$photo->id) }}" method="POST" style="display: none;">
                    @csrf @method('delete')
                </form>
          </div>
        </div>
      </div>
    @endforeach
    @else
    <div class="alert alert-info" style="margin:40px auto; text-align:center; width:500px">
        Empty Albums.
    </div>
    @endif
        
</div>
<div class="float-right">
{{ $photos->links() }}
</div>

        </div>
    </div>
</div>
@endsection