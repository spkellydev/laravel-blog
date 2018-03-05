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
				{!! $project->body !!}
				<hr>
				<p class="badge">{{ $project->category->name }}</p>
			</div>
		</article>
		<aside id="sidebar" class="col-md-4">
			<a class="btn" href="{{ $project->github }}"><h4>Review {{ $project->title }}</h4></a>
		</aside>
	</section>

@endsection