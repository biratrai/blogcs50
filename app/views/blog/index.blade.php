@section('header-right')
	<a href="{{ URL::route('newPost') }}" class="btn btn-default btn-lg">
		<span class="glyphicon glyphicon-pencil"></span>
	</a>
@stop
		
@section('content')
  @foreach ($posts as $post)
  	@include('blog.partials.post',array('post'=> $post))
  @endforeach
@stop
