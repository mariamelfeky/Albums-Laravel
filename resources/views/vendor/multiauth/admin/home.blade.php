@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Albums Count</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$photos}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-image fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Users Count</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$users}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>       
  </div>
  <div class="row justify-content-center">
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Private Albums</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$private_photos}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-image fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div> 
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-warning shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Puplic Albums</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$puplic_photos}}</div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-gray-300"></i>
              </div>
            </div>
          </div>
        </div>
      </div>       
  </div>
</div>
@endsection