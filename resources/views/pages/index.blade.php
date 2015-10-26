@extends('layouts.master')
@section('content')

<h1> Task List</h1>
<p class="head">Here is a list of all your task. <a href="{{route('tasks.create')}}">Create a new task</a></p>
<hr>

@stop