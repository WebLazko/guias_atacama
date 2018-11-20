@extends('template.templatePrestador')

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

@section('content-footer-prestador')
	<!-- FOTTER -->
	<section class="fotter-inicio">
		<div class="row footer-prestador centrar-center" style="padding-bottom: 2%">

			<!-- BLOQUE LOGO-->
			<div id="bloque_logo_prestador" class="col-3 col-sm-6 col-lg-3">
				<img id="logo_footer" src="images/guias_de_atacama_2.png" alt="logo" > 
			</div>

			<!-- BLOQUE CONTACTO -->
			<div id="bloque_contacto_prestador" class="col-5 col-sm-6 col-lg-2" style="margin-top: 1%; padding-bottom: 10px">
				<p id="contacto_prestador" style="color:white; margin-bottom: 1%">CONTACTO</p>
				<a id="icono_contacto_prestador" href="#"><i id="icono_contacto_prestador" class="fa fa-home" aria-hiden="true">&nbsp&nbspDIRECCIÓN</i></a>
				<a id="icono_contacto_prestador" href="#"><i id="icono_contacto_prestador" class="fa fa-phone" aria-hiden="true">&nbsp&nbspTELÉFONO</i></a>
				<a id="icono_contacto_prestador" href="#"><i id="icono_contacto_prestador" class="fa fa-envelope" aria-hiden="true">&nbsp&nbspMAIL</i></a>
			</div>

			<!-- BLOQUE LINK -->
			<div id="bloque_link" class="col-8 col-sm-6 col-lg-3" style="margin-top:1%;padding-bottom: 10px; margin-left:auto;margin-right: auto;">
				<p id="link" style="color:white; margin-bottom: 1%">LINK</p>
				<a id="link_contacto_prestador" href="#"><i id="chevron_prestador" class="fa fa-chevron-right" aria-hidden="true"> PÁGINA WEB</i></a><br><hr id="hr_prestador">
				<a id="link_contacto_prestador" href="#"><i id="chevron_prestador" class="fa fa-chevron-right" aria-hidden="true"> VER PERFIL ATACAMA GO</i></a><hr id="hr_prestador">
			</div>

			<!-- BLOQUE REDES SOCIALES -->
			<div id="bloque_redes_sociales_prestador" class="col-10 col-sm-6 col-lg-2" style="margin-top: 2%">
				<a href="#" id="icono_social_prestador" class="fa fa-facebook"></a>
				<a href="#" id="icono_social_prestador" class="fa fa-twitter"></a>
			</div>
		</div>
	</section>

@endsection