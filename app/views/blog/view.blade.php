@section('content')
	@include('blog.partials.post', array('post'=>$post))

	<hr />
	<section id="comments">
		@foreach($post->comments as $comment)
			<div class="comment">
				<p>{{ $comment->name}} says...</p>
				<blockquote>{{ $comment->content }}</blockquote>
			</div>
		@endforeach	
	</section>

	<section>
		<h3 class="title">Add a comment</h3>
		<form action="{{ URL::route('createComment', array('id' => $post->id)) }}" method="post">
			<div class="form-group">
				<input name="name" class="form-control" type="text" placeholder="Your name" />
			</div>
			<div class="form-group">
				<textarea name="content" class="form-control" placeholder="Write here.."></textarea>
			</div>
			<input type="submit" class="btn btn-primary" />
		</form>
	</section>
@stop