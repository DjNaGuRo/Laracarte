<nav class="navbar navbar-light navbar-expand-md bg-light"><!-- bg-light navbar-expand-md -->
	<div class="container-fluid">
		<a href="{{route('home')}}" class="navbar-brand">Laracarte</a>
		<ul class="navbar-nav"> 
			<li class="nav-item">
				<a href="{{route('home')}}" class="nav-link active">Home</a>
			</li>
			<li class="nav-item">
				<a href="{{route('about')}}" class="nav-link">About</a>
			</li>
			<li class="nav-item">
				<a href="{{route('home')}}" class="nav-link">Artisans</a>
			</li>
			<!-- Dropdown -->
			<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navbardrop">Planet</a>
				<div class="dropdown-menu">
					<a href="//laravel.com" class="dropdown-item">Laravel.com</a>
					<a href="//laravel.io" class="dropdown-item">Laravel.io</a>
					<a href="//laracasts.com" class="dropdown-item">Laracasts</a>
					<a href="//larajobs.com" class="dropdown-item">Larajobs</a>
					<a href="//laravel-news.com" class="dropdown-item">Laravel News</a>
					<a href="//larachat.com" class="dropdown-item">Larachat</a>
				</div>
			</li>
			<li class="nav-item">
				<a href="{{route('home')}}" class="nav-link">Contacts</a>
			</li>
		</ul>
		
		<ul class="nav navbar-nav justify-content-end">
			<li class="nav-item">
				<a href="#" class="nav-link">Login</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link">Register</a>
			</li>
		</ul>
	</div>
</nav>