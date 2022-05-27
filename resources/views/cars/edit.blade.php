<html>
        <div class="container">


        <form action="/cars/home/{{ $car->id }}" enctype="multipart/form-data" method="post">
            @method('PUT')
    @csrf

   
    <h1>Edit Car</h1>
          
    <label >{{ __('Car Name') }}</label>
    <input id="name" type="text" name="car_name" value= {{ $car->car_name}} >
                                    
    <label >{{ __('Model') }}</label>
    <input id="model" type="text" name="car_model" value= {{ $car->car_model}} >
    
    <label >{{ __('Color') }}</label>
    <input id="color" type="text" name="car_color"  value= {{ $car->car_color}}>

    <label >{{ __('Description') }}</label>
    <input id="description" type="text" name="car_description" value= {{ $car->car_description}}>

                               
                            
                   
    
             
            
            <div class="row pt-4">
                <button class="btn btn-primary">Update Car</button>
            </div>
        </div>

    </div> 


</form>

        </div>


    </html>