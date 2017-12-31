@extends('main')

@section('title', 'Edit Post')
@section('stylesheets')
	{!! Html::style('./css/parsley.css') !!}
	{!! Html::style('./css/select2.min.css') !!}
	<script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=c7yuxn4so9ggjebglk751gqvmghkanssf2bs39mkv0d5l5pd"></script>
	<script>
		tinymce.init({
			selector: 'textarea.editable',
			plugins: 'link image imagetools lists',
			menubar: 'false',
			branding: 'false',
			browser_spellcheck: true
		});
	</script>

@section('content')
<div class="container-fluid row">
{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => 'true']) !!}
	<div class="col-md-8">
		{{ Form::label('title', 'Title: ') }}
		{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}

		{{ Form::label('slug', 'Slug: ') }}
		{{ Form::text('slug', null, ["class" => 'form-control input-lg']) }}
		<div class="row">
		<div class="col-md-6">
		{{ Form::label('category_id', 'Category:')}}
		{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
		</div>
		<div class="col-md-6">
		{{ Form::label('tags', 'Tags:', ['class' => 'form-spacing-top']) }}
		{{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) }}
		</div>
		</div>
		{{ Form::label('featured_image', 'Update Featured Image') }}
		{{ Form::file('featured_image') }}

		{{ Form::label('body', 'Body: ') }}
		{{ Form::textarea('body', null, ['class' => 'form-control editable']) }}
	</div>
	<div class="col-md-4">
		<div class="metas">
			{{ Form::label('meta_title', 'Meta Title: ') }}
			{{ Form::text('meta_title', null, ["class" => 'form-control input-lg']) }}

			{{ Form::label('meta_description', "Meta Description:" ) }}
			{{ Form::textarea('meta_description', null, ['class' => 'form-control', 'rows' => '5'])}}
		</div>
		<br>
		<div>
			<h4>Featured Image</h4>
			<img class="img-responsive" src="{{ asset('images/' . $post->image) }}">
		</div>
		<div class="well">
			<dl class="dl-horizontal">
				<dt>
					Created At:
				</dt>
				<dd>{{ date('M j, y h:ia', strtotime($post->created_at)) }}</dd>
				<dt>
					Lasted Updated:
				</dt>
				<dd>{{ date('M j, y h:ia', strtotime($post->updated_at)) }}</dd>
			</dl>
			<hr>
			<div class="row">
				<div class="col-sm-6">
					{!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class'=>'btn btn-danger btn-block')) !!}
				</div>
				<div class="col-sm-6">
					{{ Form::submit('Save', ['class' => 'btn btn-success btn-block']) }}
				</div>
			</div>
		</div>
		<br>
	</div>
	{!! Form::close() !!}
</div>
@endsection

@section('scripts')
	{!! Html::script('./js/parsley.min.js') !!}
	{!! Html::script('./js/select2.min.js') !!}
	<script type="text/javascript">
		$('.select2-multi').select2();
		$('.select2-multi').select2().val({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');
	</script>
@endsection