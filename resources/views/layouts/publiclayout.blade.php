<link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
	.container{
		background: white;
		padding:10px 10px;
	}
	.bg-dark{
		background-color:brown !important;
	}
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
	<a class="navbar-brand" href="/dashboard">Online Ordering System</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/home">Home<span class="sr-only">(current)</span></a>
			</li>
	</li>
	<li class="nav-item dropdown active">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Our Products
		</a>
		<dix class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" href="#">Cakes</a>
			<a class="dropdown-item" href="#">Breads</a>
		</dix>
	</li>
</ul>
</div>
</nav>


<br/>
</br>
</br>
<main class="container mt-4">
	@yield('content')
</main>

<script src="{{asset('js/app.js')}}"> </script>