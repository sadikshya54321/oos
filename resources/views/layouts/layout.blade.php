<link rel="stylesheet" href="{{asset('css/app.css')}}"> {{-- <-  bootstrap css --}}
<style>
	.container{
		background: white;
		padding:10px 10px;
	}
	.bg-dark{
		background-color:#E74C3C!important;
	}
</style>
@include('layouts.header')
<br/>
</br>
</br>
<main class="container mt-4">
	@yield('content')
</main>
@include('layouts.footer')
<script src="{{asset('js/app.js')}}"> </script> {{-- <- bootstrap and jquery --}}