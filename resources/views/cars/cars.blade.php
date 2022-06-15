
 
<div class="container">
 <div class="">
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









</tr>
@endforeach
</table>





    
     


 
     
</div>
   
</div>

   
 


