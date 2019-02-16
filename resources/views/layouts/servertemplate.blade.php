	<!doctype html>
	<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>@yield('title') - PumpMykins</title>
		<!-- Fonts -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
		<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
		<link rel="stylesheet" href="{{ asset('css/panel.css') }}">
		<link rel="stylesheet" href="{{ asset('css/badges.css') }}">
		<link rel="stylesheet" href="{{ asset('css/checkbox.css') }}">
		<link rel="stylesheet" href="{{ asset('css/basic.css') }}">
	</head>
	<body>
		<canvas id="canvas"></canvas>
		<!--nav bar -->
		<nav class="navbar navbar-light navbar-expand-sm navbar-expand-md">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="http://image.noelshack.com/fichiers/2018/52/1/1545668056-mainimage.png" width="50" height="50" class="d-inline-block-align-top" alt="logo">
				PumpsMyKins
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item"><a class="nav-link" href="{{ url('/servers') }}">Nos serveurs</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/news') }}">Nouveautée(s)</a></li>
					<li class="nav-item"><a class="nav-link" href="https://github.com/orgs/PumpMyKins/">Github</a></li>
					<li class="nav-item"><a class="nav-link" href="https://pumpmykins.buycraft.net/">Boutique</a></li>
					<!--<li class="nav-item"><a class="nav-link" href="{{url('/legals')}}">Mentions Légales</a></li>-->
				</ul>
				<div class="ml-auto">
					@if (Route::has('login'))
					<div class="links">
						@auth
						<a href="{{ url('/panel') }}">Panel</a>
						<a href="{{ url('/logout') }}">Se déconnecter</a>
						@else
						<a href="{{ route('login') }}">Connexion</a>

						@if (Route::has('register'))
						<a href="{{ route('register') }}">S'inscrire</a>
						@endif
						@endauth
					</div>
					@endif
				</div>
			</div>
		</nav>

		@yield('content')

		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<script type="text/javascript" src="{{ asset('js/welcomefont.js') }}"></script>
	</body>
	</html>