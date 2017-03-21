@extends('layouts.app')


@section ('content')
<?php 
	$project->description = htmlentities($project->description);
	// dd($project->description);
?>

<div class="container">
	<div class="col-sm-8">

		@include ('layouts.errors')
		<form method="post" action="/projects/{{ $project->slug }}/edit">

			{{ csrf_field() }}

			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
			</div>

			<div class="form-group">
				<label for="name">Icon</label>
				<input type="text" class="form-control" id="icon" name="icon" value="{{ $project->icon }}">
			</div>

			<div class="form-group">
				<label for="name">Location</label>
				<input type="text" class="form-control" id="location" name="location" value="{{ $project->location }}">
			</div>

			<div class="form-group">
				<label for="description">Description</label>
				<textarea rows="10" id="description" name="description" class="form-control">{{ $project->description }}</textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Update</button>
			</div>
		</form>

	</div>
</div>
@endsection