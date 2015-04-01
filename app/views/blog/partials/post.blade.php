<article>
	<header>
		<h1>{{ $post->title}}</h1>
	</header>
	<div class="content">
		{{ $post->content }}
	</div>
	<footer>
		<p>Posted {{ $post->created_at->diffForHumans() }}</p>
		<p><a href="{{ URL::route('viewPost', array('id' => $post->id)) }}#comments">{{ $post->getNumCommentsStr() }}</a></p>
	</footer>
</article>