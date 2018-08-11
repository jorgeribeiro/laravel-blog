@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-8 blog-main">
			<h2 class="blog-post-title">
				{{ $post->title }}
			</h2>			
			<p class="blog-post-meta">{{ $post->created_at->toFormattedDateString() }}</p>

			{{ $post->body }}

			<hr>

			<div class="comments">
				<ul class="list-group">
					@foreach ($post->comments as $comment)
						<li class="list-group-item">
							<strong>
								{{ $comment->created_at->diffForHumans() }}: &nbsp;
							</strong>
							{{ $comment->body }}
						</li>
					@endforeach
				</ul>
			</div>
		</div>

		<aside class="col-md-4 blog-sidebar">
			@include('layouts.sidebar')
		</aside>

	</div>
@endsection