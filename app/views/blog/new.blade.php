@section('content')
	<h3>Add a blog post</h3>
	<form action="{{ URL::route('createPost')}}" method="post">
		<div class="form-group">
			<input name="title" class="form-control" type="text" placeholder='Blog Title'/>
		</div>
		<div class="form-group">
			<textarea name="content" class="form-control" placeholder='Write your blog post here'></textarea>
		</div>
		<div>
			<input type="submit" class="btn btn-primary"/> 
		</div>
	</form>
@stop	