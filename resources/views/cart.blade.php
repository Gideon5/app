
 
<div class="container">
 <div class="">
   <h1>Cars</h1>
   <table class="table table-bordered">
<tr>
<th >Cart No</th>
<th >Car Name</th>
<th >Car Model</th>
<th >Car Color</th>
<th >Car Description</th>
<th >Picture</th>


</tr>
@foreach ($carts as $cart)
<tr>
<td>{{ $cart->id }}</td>
<td>{{ $cart->car->car_name }}</td>
<td>{{ $cart->car->car_model }}</td>
<td>{{ $cart->car->car_color }}</td>
<td>{{ $cart->car->car_description }}</td>
<td> <img src="{{ asset($cart->car->image) }}"> </td>


<td>
<form action="{{ route('delete',$cart->id) }}" method="Post">

@csrf
@method('DELETE')

<button  class="btn btn-danger">Remove</button>
</form>


</td>
</tr>
@endforeach
</table>





    
     


 
     
</div>
   
</div>

   
 


