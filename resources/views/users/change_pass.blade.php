<h3 class="text-center">Change Password</h3>
     
    <div class="row justify-content-center">
        <div class="col-md-7 col-sm-10">
            <div class="contact-form">
                <form method="POST" action="{{ url('update-pass') }}">
                    @csrf 

                    <div class="form-group ">
                        <label for="current_password">Current Password</label>
                        <input type="password" class="form-control" name="current_password" autocomplete="current-password">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Password</label>
                        <input id="new_password" type="password" class="form-control" name="new_password" autocomplete="current-password">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                    <div class="form-group">
                        <label for="new_password">New Confirm Password</label>
                        <input id="new_confirm_password" type="password" class="form-control" name="new_confirm_password" autocomplete="current-password">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                    </div>
                    <div class="text-center p-2">
                        <button type="submit" class="btn btn-gradiant">
                            Update Password
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>