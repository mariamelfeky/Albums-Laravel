@extends('layouts.user')
@section('content')
<section class="contact-us bg-light">
    <div class="container">
        {{-- <button class="btn btn-gradiant" id = "new">
            <a href="#" >Add Photo</a></button> --}}
        <button class="btn btn-gradiant update" data-id="{{Auth::id()}}">
            <a href='#' >Update Profile</a></button>
        <button class="btn btn-gradiant" id = "change_pass">
            <a href="#" >Change Password</a></button>
            @if(session('success'))
            <div class="alert alert-success disapled" role="alert">
              <p>{{session('success')}}<a class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
            </div>     
            @endif
      <div id= "data">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{Auth::user()->name}}</td>
                    <td>{{Auth::user()->email}}</td>
                </tr>
            </tbody>
        </table>
      </div>
    </div>
</section>
@endsection
