 
 <div class="container">

 <form action="/edit" enctype="multipart/form-data" method="post">
    @csrf

   <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Article</h1>
            </div>

        <div class="row mb-3">


                            <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>

                            
                                <input id="title"
                                 type="text"
                                  class="form-control @error('title') is-invalid @enderror"
                                   name="title" value="{{ old('title') }}"
                                     autocomplete="caption" autofocus>

                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="row mb-3">


<label for="body" class="col-md-4 col-form-label">{{ __('Body') }}</label>


    <input id="body"
     type="text"
      class="form-control @error('body') is-invalid @enderror"
       name="body" value="{{ old('body') }}"
         autocomplete="body" autofocus>

    @error('body')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

</div>

    
             
            
            <div class="row pt-4">
                <button class="btn btn-primary">Create New Article</button>
            </div>
        </div>

    </div> 


</form>

         
     


 
     
</div>
   
</div>

   
 