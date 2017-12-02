<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
</head>
<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.css')}}">
<body>
	<nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{route('home')}}">Laravel CRUD </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li ><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('create')}}">Create</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

	<div class="container">
		@yield('content')
	</div>
</body>
</html>