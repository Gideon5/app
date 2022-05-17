 
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
<form action="{{ route('articles.destroy',$article->id) }}" method="Post">
<a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form>
</td>
</tr>
@endforeach
</table>




 <a  href="{{ url('/create') }}"><button class="btn btn-primary">Add New Article</button></a>
            </div>


    
     


 
     
</div>
   
</div>

   
 