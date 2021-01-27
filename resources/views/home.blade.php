@extends('layouts.user')
@section('content')
<section class="check_demo_movie">
    <div class="container">
        <h2 class=" wow fadeInDown">Check Our <span class="main-color"> Albums</span></h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
            industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
            and scrambled it to make a type specimen book.</p>
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
                        </p>
                    </div>
                </div>

            </div>
            @endforeach
            @else
            <div class="alert alert-info" style="margin:40px auto; text-align:center; width:500px">
                No Albums Yet
                </div>
            @endif
                
        </div>
    </div>
</section>
{{ $photos->links() }}

@endsection