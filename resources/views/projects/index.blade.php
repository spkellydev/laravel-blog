@extends('main')
@section('title', 'Projects')
@section('meta_title', 'My Projects | SPK.Design | PHP JS CSS & More')
@section('meta_description', "Here are some of the projects I work on professionally and for fun! Contact me to develop your project")
@section('content')

	<div class="row">
		<div class="col-md-12">
			<h1>My Projects</h1>
		</div>
	</div>
	@foreach ($projects as $project)
	<div class="row">
		<div class="col-md-8 col-md-offest-2">
			<h2>{{ $project->title }}</h2>
			<h5>Published: {{ date('M j, Y', strtotime($project->created_at)) }}</h5>

			<p>{{ substr(strip_tags($project->body), 0, 250) }}{{ strlen(strip_tags($project->body)) > 250 ? '...' : "" }}</p>
			<div class="tags">
				@foreach ($project->categories as $cat)
					<span class="label label-default">{{ $cat->name }}</span>
				@endforeach
			</div>
			<br>
			<a href="{{ route('blog.single', $project->slug) }}" class="btn btn-primary">Read More</a>
		</div>
	</div>
	<hr>
	@endforeach
	<div class="row">
		<div class="col-md-12">
			{!! $projects->links() !!}
		</div>
	</div>
@endsection