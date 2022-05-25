 
 <div class="container">

 <form action="/create" enctype="multipart/form-data" method="post">
    @csrf

   <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Create New Article</h1>
            </div>

        <div class="row mb-3">


                            <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>

                            
                                <input id="title"
                                 type="text"
                                   name="title" value="{{ old('title') }}"
                                     autocomplete="caption" autofocus>

                               
                            
                        </div>

                        <div class="row mb-3">


<label for="body" class="col-md-4 col-form-label">{{ __('Body') }}</label>


    <input id="body"
     type="text"
       name="body" value="{{ old('body') }}"
         autocomplete="body" autofocus>

  

</div>

    
             
            
            <div class="row pt-4">
                <button class="btn btn-primary">Create New Article</button>
            </div>
        </div>

    </div> 


</form>

         
     


 
     
</div>
   
</div>

   
 