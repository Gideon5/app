
 
<div class="container">
 <div class="">
   <h1>Cars</h1>
   <table class="table table-bordered">
<tr>
<th>Car No</th>
<th>Car Name</th>
<th>Car Model</th>
<th>Car Color</th>
<th>Car Description</th>
<th width="280px">Action</th>
</tr>
@foreach ($cars as $car)
<tr>
<td>{{ $car->id }}</td>
<td>{{ $car->car_name }}</td>
<td>{{ $car->car_model }}</td>
<td>{{ $car->color }}</td>
<td>{{ $car->description }}</td>

<td>
<form action="{{ route('delete',$car->id) }}" method="Post">

@csrf
@method('DELETE')

<button  class="btn btn-danger">Delete</button>
</form>


<a class="btn btn-primary" href="{{ route('edit',$car->id) }}">Edit</a>
</td>
</tr>
@endforeach
</table>




 <a  href="{{ url('/car_create') }}"><button class="btn btn-primary">Add New Car</button></a>
            </div>


    
     


 
     
</div>
   
</div>

   
 


