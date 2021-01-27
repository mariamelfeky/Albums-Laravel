@extends('layouts.user')
@section('content')
<section class="check_demo_movie">
    <div class="container">
        <h2 class=" wow fadeInDown">Check My <span class="main-color"> Albums</span></h2>
        <p>All Your Uploaded Albums puplic and private ..</p>
        @if(session('success'))
        <div class="alert alert-success disapled" role="alert">
          <p>{{session('success')}}<a class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
        </div>     
      @endif
      <button class="btn btn-gradiant" id = "new">
        <a href="#" >Add Photo</a></button>
        <div id="data">
        <div class="row">
            {{-- <div id="data"></div> --}}
            @if ($photos->count())
            @foreach ($photos as $item)
            <div class="col-md-4">                    
                <div class="card wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="card-header">
                        <img src="{{asset('storage/'.$item->photo)}}" class="lazyload">
                    </div>
                    <div class="card-body">
                        <h4>{{$item->user->name}}</h4>
                        <p class="package-price">
                            <span>{{$item->created_at}}</span>
                            <span class='text-info'>{{$item->is_private ? 'private' : 'puplic'}}</span>
                        </p>
                <div class="row">
                    <form method="POST" action="{{route('photo.update',$item->id)}}"  files = 'true' enctype='multipart/form-data'>
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <div class="form-check row">
                            <div class="col-md-8">
                                <input class="form-check-input is_private" type="checkbox" name="is_private" {{$item->is_private ?  "checked value=1" : "value=0"}}>
                                <label class="form-check-label h6" for="is_private">
                                    {{$item->is_private ? 'Set photo as Public?' : 'Set photo as Private?'}}
                                </label>
                                <button type="submit" class="btn btn-success" data-id="{{ $item->id }}">Update</button> 

                            </div>
                            </div>
                        </div>
                    </form>
                        </div>

                            <span style="float: right;">
                            {!! Form::open(['route' => ['photo.destroy', $item->id] ,'method' => 'delete' ]) !!}
                            {!! Form::submit('Delete',['class'=>'btn btn-danger','data-id' =>$item->id]) !!}
                            {!! Form::close() !!}
                            </span>
                    </div>
                </div>

            </div>
            @endforeach
            @else
            <div class="alert alert-info" style="margin:40px auto; text-align:center; width:500px">
                No Albums yet.
            </div>
            @endif
        </div>
        
{{ $photos->links() }}

    </div>
    </div>
    
</section>

@endsection

