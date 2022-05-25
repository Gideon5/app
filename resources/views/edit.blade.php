 
 <div class="container">

 <form action="/article/{{ $article->id }}" enctype="multipart/form-data" method="post">
     @method('PUT')
    @csrf

   <div class="row">
        <div class="col-8 offset-2">
            <div class="row">
                <h1>Edit Article</h1>
            </div>

        <div class="row mb-3">


                            <label for="title" class="col-md-4 col-form-label">{{ __('Title') }}</label>

                            
                                <input id="title" type="text" name="title" value= {{ $article->title}} >

                              
                            
                        </div>

                        <div class="row mb-3">


<label for="body" >{{ __('Body') }}</label>


    <textarea id="body" name="body"> {{ $article->body}}</textarea>

    

</div>

    
             
            
            <div class="row pt-4">
                <button class="btn btn-primary">Update  </button>
            </div>
        </div>

    </div> 


</form>

         
     


 
     
</div>
   
</div>

   
 