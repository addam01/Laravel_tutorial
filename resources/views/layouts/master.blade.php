<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <title>App Name - @yield('title')</title>
    </head>
    <body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                {{-- <a class="navbar-brand" href="{{ route('home') }}">Tasks</a> --}}
                <a class="navbar-brand" href="">Tasks</a>
            </div>
            <div class="nav navbar-nav navbar-right">
                <li><a href="">Home</a></li>
                {{-- <li><a href="{{ route('tasks.index') }}">Tasks</a></li> --}}
                <li><a href="">Tasks</a></li>
            </div> 
        </div>
        
    </nav>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>