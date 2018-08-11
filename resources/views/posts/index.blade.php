@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-8 blog-main">		
			<div class="blog-post">
				@foreach ($posts as $post)
					@include('posts.post')
				@endforeach			
			</div>
			<nav class="blog-pagination">
				<a class="btn btn-outline-primary" href="#">Older</a>
				<a class="btn btn-outline-secondary disabled" href="#">Newer</a>
			</nav>
		</div>

		<aside class="col-md-4 blog-sidebar">
			@include('layouts.sidebar')
		</aside>

	</div>
@endsection