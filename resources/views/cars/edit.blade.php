<html>
        <div class="container">


        <form action="/car/{{ $car->id }}" enctype="multipart/form-data" method="post">
    @csrf

   
    <h1>Edit Car</h1>
          
    <label >{{ __('Car Name') }}</label>
    <input id="name" type="text" name="name" value= {{ $car->name}} >
                                    
    <label >{{ __('Model') }}</label>
    <input id="model" type="text" name="model" value= {{ $car->model}} >
    
    <label >{{ __('Color') }}</label>
    <input id="color" type="text" name="color"  value= {{ $car->color}}>

    <label >{{ __('Description') }}</label>
    <input id="description" type="text" name="description" value= {{ $car->description}}>

                               
                            
                   
    
             
            
            <div class="row pt-4">
                <button class="btn btn-primary">Update Car</button>
            </div>
        </div>

    </div> 


</form>

        </div>


    </html>