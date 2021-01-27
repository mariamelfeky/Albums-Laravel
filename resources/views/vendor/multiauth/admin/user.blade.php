@extends('multiauth::layouts.app') 
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Registered Users List
                </div>
                <div class="card-body">
    @include('multiauth::message')
                    <ul class="list-group">
                        @foreach ($users as $user)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $user->name }}
                            <span>
                                {{$user->email}}
                            </span>
                            {{-- {{ $admin->active? 'Active' : 'Inactive' }} --}}
                            @permitTo('DeleteUser')
                            <div class="float-right">
                                <a href="#" class="btn btn-sm btn-secondary mr-3" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $user->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('user.delete',[$user->id]) }}" method="POST" style="display: none;">
                                    @csrf @method('delete')
                                </form>
                            </div>
                            @endpermitTo
                        </li>
                        @endforeach @if($users->count()==0)
                        <p>No Registered users yet</p>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection