
 
<div class="container">
 <div class="">

 <a  href="{{ url('/cart') }}"><button class="btn btn-primary">Show Cart</button></a>

   <h1>Cars</h1>
   <table class="table table-bordered">
<tr>
<th >Car No</th>
<th >Car Name</th>
<th >User Id</th>
<th >User Name</th>
<th >User Phone No</th>

</tr>
@foreach ($cars as $car)
<tr>
<td>{{ $car->id }}</td>
<td>{{ $car->car_name }}</td>
<td>{{ $car->user->id }}</td>
<td>{{ $car->user->name}}</td>
<td>{{ $car->user->phone}}</td>




<td>

<td>
    <button>
<a class="btn btn-primary" href="{{ route('addCart',$car->id) }}">Add to Cart </a>
</button>
</td>

</td>










</tr>
@endforeach
</table>





    
     


 
     
</div>
   
</div>

   
 


