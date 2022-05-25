 
 <div class="container">
 <div class="">
   <h1>Articles</h1>
   <table class="table table-bordered">
<tr>
<th>Article No</th>
<th>Title</th>
<th>Body</th>
<th width="280px">Action</th>
</tr>
@foreach ($articles as $article)
<tr>
<td>{{ $article->id }}</td>
<td>{{ $article->title }}</td>
<td>{{ $article->body }}</td>
<td>
<form action="/article/{{ $article->id}}" >

@csrf
@method('DELETE')

<button type="" class="btn btn-danger">Delete</button>
</form>


<a class="btn btn-primary" href="{{ route('edit',$article->id) }}">Edit</a>
</td>
</tr>
@endforeach
</table>




 <a  href="{{ url('/create') }}"><button class="btn btn-primary">Add New Article</button></a>
            </div>


    
     


 
     
</div>
   
</div>

   
 