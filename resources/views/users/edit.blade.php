<h3 class="text-center">Update your Profile</h3>
     
        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10">
                <div class="contact-form">
                    <form method="POST" action="{{ route('user.update',Auth::id()) }}">
                        {{ method_field("PATCH") }}
                        @csrf

                        <div class="form-group ">
                            <label for="inputName">Your Name</label>
                            <input id="inputName" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name}}" placeholder="Write Your Name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Your Email Address</label>
                            <input id="inputEmail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{Auth::user()->email}}" placeholder="Write Your Email" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="text-center p-2">
                            <button type="submit" class="btn btn-gradiant">
                                Update
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>