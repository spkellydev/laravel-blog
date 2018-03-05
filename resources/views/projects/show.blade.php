@extends('main')

@section('title', 'View Project')

@section('content')
<div class="row">
	<div class="col-md-8">
		<img class="img-responsive" src="{{ asset('images/' . $project->image) }}">
		<h1>{{ $project->title }}</h1>
		<p class="lead">{!! $project->body !!}</p>
		<hr>

		<p>TITLE: {{ $project->meta_title }}</p>
		<hr>


	</div>
	<div class="col-md-4">
		<div class="well">
		<label>URL:</label>
		<a href="{{ url('projects/'.$project->slug) }}">{{ url('projects/'.$project->slug) }}</a>
			<dl class="dl-horizontal">
				<label>Category:</label>
				<p>{{ $project->category->name }}</p>
			</dl>
			<dl class="dl-horizontal">
				<dt>
					Created At:
				</dt>
				<dd>{{ date('M j, y h:ia', strtotime($project->created_at)) }}</dd>
				<dt>
					Lasted Updated:
				</dt>
				<dd>{{ date('M j, y h:ia', strtotime($project->updated_at)) }}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('repos.edit', 'Edit', array($project->id), array('class'=>'btn btn-primary btn-block')) !!}
				</div>
				<div class="col-sm-6">
					{!! Form::open(['route' => ['repos.destroy', $project->id], 'method' => 'DELETE']) !!}

					{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

					{!! Form::close() !!}
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
				<hr>
					{{ Html::linkRoute('projects.index', '<< See All projects', [], ['class' => 'btn btn-default btn-block']) }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection