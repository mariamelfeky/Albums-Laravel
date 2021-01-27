<h4>My Ablums</h4>
<div class="row">

    @if ($photos)
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
        Empty Albums.
    </div>
    @endif
        
</div>
<div class="float-right">
{{ $photos->links() }}
</div>