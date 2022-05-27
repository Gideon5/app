    <html>
        <div class="container">


        <form action="/car_create" enctype="multipart/form-data" method="post">
    @csrf

   
    <h1>Add New Car</h1>
          
    <label >{{ __('Car Name') }}</label>
    <input id="name" type="text" name="car_name" value="{{ old('car_name') }}" >
                                    
    <label >{{ __('Model') }}</label>
    <input id="model" type="text" name="car_model"  value="{{ old('car_model') }}">
    
    <label >{{ __('Color') }}</label>
    <input id="color" type="text" name="car_color" value="{{ old('car_color') }}" >

    <label >{{ __('Description') }}</label>
    <input id="description" type="text" name="car_description" value="{{ old('car_description') }}" >

                               
                            
                   
    
             
            
            <div class="row pt-4">
                <button class="btn btn-primary">Create New Car</button>
            </div>
        </div>

    </div> 


</form>

        </div>


    </html>