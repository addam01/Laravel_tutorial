<!DOCTYPE html>
<html>
<head>
	<title>App Name - @yield('title')</title>
</head>
<body>
	@section('sidebar')
		This is the master sidebar<br>
		<?php echo $name . ' '. $address;
		?><br>
		{{-- Or we can one line print it --}}
		{{$name . ' '.$address}} <br>

		{{-- Or we can just loop an entire array --}}
		@foreach ($fruits as $fruit)
			{{$fruit}}<br>
		@endforeach
	@show

	<div class="container">
		@yield('content')
	</div>
</body>
</html>