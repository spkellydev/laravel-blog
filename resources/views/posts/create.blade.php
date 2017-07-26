@extends('main')

@section('title', 'Create New Post')

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

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Create New Post</h1>
			<hr>
			{{-- Using laravel form helper from Laravel Collective --}}
			{!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '', 'files' => 'true']) !!}
			    {{ Form::label('title', 'Title:') }}
			    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Your Title', 'required', 'maxlength'=>'255') )}}
			    <div class="col-md-12" style="padding: 0">
			    {{ Form::label('slug', 'Slug:')}}
			    {{ Form::text('slug', null, array('class' => 'form-control', 'required', 'minlength' => '3', 'maxlength' => '255')) }}
			    </div>
			    <div class="col-md-6" style="padding: 0">
			    {{ Form::label('category_id', 'Category:')}}
			    <select class="form-control" name="category_id">
			    	@foreach ($catgories as $category)
			    		<option value="{{ $category->id }}">{{ $category->name }}</option>
			    	@endforeach
			    </select>
			    </div>
			    <div class="col-md-6" style="padding: 0">
			    {{ Form::label('tags', 'Tags:')}}
			    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
			    	@foreach ($tags as $tag)
			    		<option value="{{ $tag->id }}">{{ $tag->name }}</option>
			    	@endforeach
			    </select>
			    </div>
			    <br>
			    <div class="col-md-12" style="padding: 0">
			    {{ Form::label('featured_image', 'Upload Featured Image') }}
			    {{ Form::file('featured_image')}}
			    </div>
			    <div class="col-md-12" style="padding: 0">
			    {{ Form::label('body', "Post Body:" ) }}
			    {{ Form::textarea('body', null, array('class' => 'form-control editable', 'placeholder' => 'Happy Blogging!') ) }}
			    </div>
			    <div class="col-md-12" style="padding: 0">
			    {{ Form::label('meta_title', "Meta Title:" ) }}
			    {{ Form::text('meta_title', null, array('class' => 'form-control', 'placeholder' => 'SEO Title', 'required', 'maxlength'=>'255') )}}
			    {{ Form::label('meta_description', "Meta Description:" ) }}
			    {{ Form::textarea('meta_description', null, array('class' => 'form-control', 'placeholder' => 'SEO Description!', 'rows' => '3') ) }}
			    </div>
			    {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block') ) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection

@section('scripts')
	{!! Html::script('./js/parsley.min.js') !!}
	{!! Html::script('./js/select2.min.js') !!}

	<script type="text/javascript">
		$('.select2-multi').select2();
	</script>
@endsection