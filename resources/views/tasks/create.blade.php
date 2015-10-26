@extends ('layouts.master')

@section('content')

<h1>Add a new task</h1>
<p class="lead">Add to your task list below.</p>

{!!Form::open([
	'route' =>'tasks.store'
	])!!}
	<div class="form-group">
	{!!Form::label('title', 'Title:',['class' => 'control-label'])!!}
	{!!Form::text('title',null,['class' => 'form-control'])!!}
		
	</div>
	<div class="form-group">
		{!!Form::label('description','Description',['class' => 'control-label'])!!}
		{!!Form::textarea('description',null,['class' => 'form-control'])!!}
	</div>

	{!!Form::submit('Create new task',['class' => 'btn btn-primary'])!!}
	{!!Form::close()!!}
	
	
		
@stop