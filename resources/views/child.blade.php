@extends ('layouts.master')

@section('title','Page Title')

@section('sidebar')
	@parent

	<p>This is the appended master sidebar</p>

@endsection

@section('content')
	<p>This is my body content</p>
@endsection