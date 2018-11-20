@extends('template.header')
@section('content')

	<div class="max-ancho">
		<div class="row">
			<div class="centrar-derecha header-seccion col-lg-12">
				<img class="img-noticia" src=@yield('imagen')>
				<a class="titulo-seccion text-white">@yield('seccion')</a>
			</div>
		</div>
  		@yield('content-seccion')
  	</div>

	@include('template.footer')

	<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			        document.getElementById("myBtn").style.display = "block";
			    } else {
			        document.getElementById("myBtn").style.display = "none";
			    }
			}
			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
			    document.body.scrollTop = 0;
			    document.documentElement.scrollTop = 0;
			}
		</script>	 
@endsection