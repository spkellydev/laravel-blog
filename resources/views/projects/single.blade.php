@extends('main')
@section('title', " $project->title")
@section('meta_title', " $project->meta_title")
@section('meta_description', "$project->meta_description")

@section('components')
    <script src="{{ elixir('js/project.js') }}"></script>
@endsection

@section('content')

	<section id="project" class="row projects">
		<article class="col-md-8">
			<project-header 
				src="{{ asset('images/' . $project->image) }}" 
				category="{{ $project->category->name }}" 
				title="{{ $project->title }}">
			</project-header>
			<div class="col-md-8 col-md-offset-2">
				<p>{!! $project->body !!}</p>
				<hr>
				<p class="badge">{{ $project->category->name }}</p>
			</div>
		</article>
		<aside>
			<h3>See on GitHub</h3>
		<a href="{{ $project->github }}">{{ $project->title }}</a>
		</aside>
	</section>

@endsection