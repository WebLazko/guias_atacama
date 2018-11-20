@extends('template.header')

@section('contenido-responsive')
	<div class="max-ancho">
  		@yield('content-responsive')
	</div>

@endsection



@section('contenido')
	<!--============================= TEMPLATE ===============-->
	<div class="max-ancho">
  		@yield('content-master')
	</div>

@endsection
  <!--============================= TEMPLATE ===============-->

@section('content-footer')
	<!-- FOTTER -->
	<section class="fotter-inicio" style="color:white;">
		<div class="row footer-1 centrar-center" style="padding-bottom: 2%">

			<!-- BLOQUE LOGO-->
			<div id="bloque_logo" class="col-3 col-sm-3 col-lg-3">
				<img id="logo_footer" src="images/guias_de_atacama_2.png" alt="logo" > 
			</div>

			<!-- BLOQUE DESCRIPCION -->
			<div id="bloque_descripcion" class="col-5 col-sm-4 col-lg-2">
				<a>DescripcionDescripcionDescripcion<br>DescripcionDescripcionDen<br>DescripcionDescripcionDescripcion<br>DescripcionDescripcionDescripcionDescripcion<br></a>
			</div>

			<!-- BLOQUE CONTACTO -->
			<div id="bloque_contacto" class="col-10 col-sm-2 col-lg-2">
				<p id="contacto" style="color:white; margin-bottom: 1%">CONTACTO</p>
				<a id="icono_contacto" href="#"><i class="fa fa-home" aria-hiden="true">&nbsp&nbspDIRECCIÓN</i></a>
				<a id="icono_contacto" href="#"><i class="fa fa-phone" aria-hiden="true">&nbsp&nbspTELÉFONO</i></a>
				<a id="icono_contacto" href="#"><i class="fa fa-envelope" aria-hiden="true">&nbsp&nbspMAIL</i></a>
			</div>

			<!-- BLOQUE LINKS -->
			<div id="bloque_redes_sociales" class="col-12 col-sm-6 col-lg-4" style="margin-top: 4%">
				<a href="#" id="icono_social" class="fa fa-facebook"></a>
				<a href="#" id="icono_social" class="fa fa-twitter"></a>
				<a href="#" id="icono_social" class="fa fa-instagram"></a>
			</div>
		</div>
	</section>

@endsection
