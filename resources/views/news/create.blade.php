@extends('layouts.master')
@section('title','Create Employee')
@endsection

@section('content')
	<h1>Enter new Employee</h1>
	<form method="post" action="{{action('NewsController@store')}}">
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		Title : <input type="text" name="title"><br>
		Description : <input type="text" name="description"><br>
		<button type="submit">Submit News</button>
	</form>

@stop