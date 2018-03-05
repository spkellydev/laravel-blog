@extends('main')

@section('title', 'All Projects')
@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Projects</h1>
			<hr>
		</div>
		<div class="col-md-2">
            <p>link</p>
			{{--  <a href="{{ route('posts.create') }}" class="btn btn-primary btn-primary">Create new Post</a>  --}}
		</div>
		<hr>
	</div> {{-- end of row --}}
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>					
					<th>Title</th>					
					<th>Body</th>					
					<th>Created at</th>					
					<th></th>					
				</thead>
				<tbody>
					@foreach ($projects as $project )
						<tr>
							<td>{{ $project->id }}</td>
							<td>{{ $project->title }}</td>
							<td>{{ substr(strip_tags($project->body), 0, 50) }}{{ strlen(strip_tags($project->body)) > 50 ? "..." : "" }}</td>
							<td>{{ date('M j, y', strtotime($project->created_at)) }}</td>
							{{--  <td><a href="{{route('projects.show', $project->id)}}" class="btn btn-default btn-sm">View</a><a href="{{route('projects.edit', $project->id)}}" class="btn btn-info btn-sm">Edit</a></td>  --}}
        				</tr>
					@endforeach
					
				</tbody>
			</table>

			<div class="text-center">
				{!! $projects->links(); !!}
			</div>
		</div>
	</div>
@stop