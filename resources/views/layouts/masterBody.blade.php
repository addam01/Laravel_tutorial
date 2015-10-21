<!DOCTYPE html>
<html>
	<head>
		@include('layouts.masterHead')
		<title>Title - @yield('title')</title>
	</head>

<body>
	<nav class="navbar navbar-custom" role="navigation">
	        <div class="container">
	            <div class="navbar-header page-scroll">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
	                    <i class="fa fa-bars"></i>
	                </button>
	                <a class="navbar-brand">
	                    <h1>SQUAD FREE</h1>
	                </a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="{{'employee'}}">Home</a></li>
			        <li><a href="{{'news/json'}}">News JSON</a></li>
					<li><a href="#service">Service</a></li>
					<li><a href="#contact">Contact</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="#">Example menu</a></li>
			            <li><a href="#">Example menu</a></li>
			            <li><a href="#">Example menu</a></li>
			          </ul>
			        </li>
			      </ul>
	            </div>
	            <!-- /.navbar-collapse -->
	        </div>
	        <!-- /.container -->
	</nav>
    <section>
		@section('content')
		das
		@show	    		
    </section>
	    

</body>
</html>