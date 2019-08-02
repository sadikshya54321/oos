<link rel="stylesheet" href="{{asset('css/app.css')}}"> {{-- <-  bootstrap css --}}
@include('layouts.header')
<br/>
</br>
</br>
<main class="container mt-4">
	@yield('content')
</main>
@include('layouts.footer')
<script src="{{asset('js/app.js')}}"> </script> {{-- <- bootstrap and jquery --}}