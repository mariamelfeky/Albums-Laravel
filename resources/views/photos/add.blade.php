
        <h3 class="text-center">Add New photo</h3>
     
        <div class="row justify-content-center">
            <div class="col-md-7 col-sm-10">
                <div class="contact-form">
                    <form method="POST" action="{{route('photo.store')}}"  files = 'true' enctype='multipart/form-data'>
                        @csrf

                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" id="addphoto" class="custom-file-input form-control-user @error('photo') is-invalid @enderror" placeholder="Upload your photo" name="photo" required autofocus>
                                <label class="custom-file-label" for="photo">Upload Your New Photo</label>
                                @error('photo')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                            
                        </div>
                        <div class="form-group">
                                <div class="form-check row">
                            <div class="col-md-8">
                                    <input class="form-check-input" type="checkbox" name="is_private">
                                    <label class="form-check-label h6" for="is_private">
                                        {{ __('Set photo as private') }}
                                    </label>
                                </div>
                                
                            </div>
                            @error('is_private')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                        </div>
                    
                        <div class="text-center p-2">
                            <button type="submit" class="btn btn-gradiant">
                                Add Photo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

<script>
    $('#addphoto').change(function(e){
            var fileName = e.target.files[0].name;
            $(e.target).next().text(fileName);
            console.log(fileName);
        });
</script>

