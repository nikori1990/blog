@extends('main')

@section('title', '| Edit Blog Post')

@section('content')

	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT']) !!}
		<div class="col-md-8">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ['class' => 'form-control input-lg']) }}
			{{-- <h1>{{ $post->title }}</h1> --}}
			{{ Form::label('body', 'Body:', ['style' => 'margin-top:20px']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		    {{-- <p class="lead">{{ $post->body }}</p> --}}
	    </div>

	    <div class="col-md-4">
	    	<div class="well">
	    		<dl class="dl-horizontal">
	    			<dt>Created At:</dt>
	    			<dd>{{ date('M j, Y h:i A', strtotime($post->created_at)) }}</dd>
	    		</dl>

	    		<dl class="dl-horizontal">
	    			<dt>Last Updated:</dt>
	    			<dd>{{ date('M j, Y h:i A', strtotime($post->updated_at)) }}</dd>
	    		</dl>

	    		<hr>

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.show','Cancel', 
											array($post->id), 
											array('class' => 'btn btn-danger btn-block')
											) !!}
						{{-- <a href="#" class="btn btn-primary btn-block">Edit</a> --}}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
						{{-- {!! Html::linkRoute('posts.update','Save Changes', 
											array($post->id), 
											array('class' => '')
											) !!} --}}
						{{-- <a href="#" class="btn btn-danger btn-block">Delete</a> --}}
					</div>
				</div>

	    	</div>
	    </div>
	    {!! Form::close() !!}
	</div>

@stop