@extends('layouts.masterBody')
@section('title','Employee')
@endsection


@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<table class="table">
					<tr>
						<td>Name</td>
						<td>Department</td>
					</tr>
					<tr>
						<td>Addam</td>
						<td>IT</td>
					</tr>
					<tr>
						<td>Adeep</td>
						<td>Finance</td>
					</tr>
				</table>
			</div>
			<div class="col-md-6">
				<form method="post" action="">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="text" name="title">
					<input type="text" name="description">
					<button type="submit">Submit</button>
				</form>
			</div>
		</div>
	</div>
	
	
@stop