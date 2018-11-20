<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title','Default') | Panel de Administración</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- bootstrap css-->
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"/>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}"> 
  <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}">

  <!-- js-->
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
  <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/add.js') }}"></script>
  <script src="{{ asset('customFile/custom-file-input.js') }}"></script>

  <!-- Css propio-->
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/estilo_admin.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/slick.css') }}"/>
  <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}"/>
  <link rel="stylesheet" href="{{ asset('customFile/demo.css') }}" />
  <link rel="stylesheet" href="{{ asset('customFile/component.css') }}" />

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</head>
<body>


    
    <section class="fotter-inicio" style="color:white;">
		<div class="row centrar-center" style="padding-bottom: 2%">
			<div class="col-12 col-sm-12 col-lg-12"  style="height: 20px;background-color:#E48328;"></div>

			<!-- BLOQUE LOGO-->
			<div class="col-4 col-sm-4 col-lg-4" style="background-color: #F04B4D">
				<img src="/../images/wow-icon.png" alt="logo"  style="width:25%; margin-top:5%; margin-bottom: 5%; margin-left: 2%;" > 
			</div>

			<div class="col-4 col-sm-4 col-lg-4" style="background-color: #F04B4D">
				<p style="margin-left: -70%; margin-top: 15%; color: white"><i class="fa fa-user" aria-hiden="true">&nbsp&nbspBIENVENIDO USUARIO</i></p>
			</div>

			<div class="col-4 col-sm-4 col-lg-4" style="background-color: #F04B4D">
				<a href="#" style="color: white; margin-top: 12%;margin-left: 30%; position: absolute;">CERRAR SESIÓN</a>
			</div>


			<div class="col-12 col-sm-12 col-lg-12" style="background-color: white">
				@yield('subtitulo')
			</div>

			<div class="col-12 col-sm-12 col-lg-12" style="background-color: #EEF3F4">
				@include('flash::message')
				@yield('contenido')
			</div>
		</div>
	</section>
    	





<!-- FOOTER -->
	<div class="row">
		<div class="footer-guia col-lg-12 centrar-center">
			<p style="color: white;margin-top: 1%;margin-bottom: 1%"> GUÍAS DE ATACAMA</p>
		</div>
	</div>

</body>
</html>
