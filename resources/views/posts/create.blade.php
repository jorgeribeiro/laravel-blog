@extends('layouts.master')

@section('content')
	<h1>Create a post</h1>
	<hr>
	<form method="POST" action="/posts">
		{{ csrf_field() }}
		<div class="form-group">
			<label for="exampleInputEmail1">Title</label>
			<input type="text" class="form-control" id="title" name="title">
		</div>
		<div class="form-group">
			<label for="exampleInputPassword1">Body</label>
			<textarea type="text" class="form-control" id="body" name="body"></textarea>
		</div>
		
		<div class="form-group">
			<button type="submit" class="btn btn-primary">Publish</button>
		</div>

		@include('layouts.errors')
	</form>
@endsection