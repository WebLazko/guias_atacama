<!DOCTYPE html>
<html lang="en">
<head>
  <title>Inicio del panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <!-- bootstrap css-->
  
  <!-- js-->
  <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
  <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js') }}"></script>

  <!-- Carrusel -->
  <link rel="stylesheet" type="text/css" href="{{ asset('responsive/jcarousel.responsive.css') }}">
  <script type="text/javascript" src="{{ asset('carrusel/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('carrusel/jquery.jcarousel.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('responsive/jcarousel.responsive.js') }}"></script>

  <!-- bootstrap css-->
  <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"/>
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-grid.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}"> 
  <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.css') }}">


  <script>
            $(function() {
                $('#jcarousel1').jcarousel({
                 wrap: 'both',
                 });
                $('.jcarousel').jcarouselAutoscroll({
                  interval: 3300
              });
            });

            $(document).ready(function(){
              $('.navbar-toggler').click(function(event){
                  event.stopPropagation();
                   $("#collapsibleNavbar").slideToggle("fast");
              });
              $("#collapsibleNavbar").on("click", function (event) {
                  event.stopPropagation();
              });
          });

            $(document).on("click", function () {
                $("#collapsibleNavbar").hide();
            });

        </script>


</head>
<body>

<div class="container-fluid">
  <nav id="barra_navegacion_todo" class="row navbar navbar-expand-md navbar-dark">
  <a href="/"><span id="espan_logo" style="background-image: url('images/guias_de_atacama3.png');width: 195px;   height: 33px;"></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a id="a_categoria" class="nav-link" href="/costa">Costa</a>
      </li>
      <li class="nav-item">
        <a id="a_categoria" class="nav-link" href="/valle">Valle</a>
      </li>
      <li class="nav-item">
        <a id="a_categoria" class="nav-link" href="/montana">Montaña</a>
      </li>    
    </ul>
  </div>  
</nav>
  <!-- CARRUSEL -->
  <div id="row_carrusel" class="col-md-12" style="background-color: #f6902a">
    <div class="wrapper" id="wrapper_carrusel" >
            <div id="jcarousel_wrapper" class="jcarousel-wrapper">
                <div class="jcarousel" id="jcarousel1">
            <ul>
             <li style="margin-right: 20px"><img src="images/carrusel/costa1.png" alt=""></li>
             <li style="margin-right: 20px"><img src="images/carrusel/costa2.png" alt=""></li>
             <li style="margin-right: 20px"><img src="images/carrusel/desierto1.png" alt=""></li>
             <li style="margin-right: 20px"><img src="images/carrusel/desierto2.jpg" alt=""></li>
             <li style="margin-right: 20px"><img src="images/carrusel/valle1.png" alt=""></li>
             <li style="margin-right: 20px"><img src="images/carrusel/valle2.png" alt=""></li>
            </ul>
        </div>
                <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                <a href="#" class="jcarousel-control-next">&rsaquo;</a>
            </div>
        </div>
  </div>

  <div class="row" style="background: white;">
    <div id="logos" class="col-xs-2 col-sm-3 col-lg-3 d-none d-xl-block d-lg-block d-sm-block">@yield('logo')</div> 
    <div id="cuerpo" class="col-xs-10 col-sm-9 col-lg-9 d-none d-lg-block d-sm-block"  style="height:auto;background-color:white">@yield('contenido')</div>


    <div id="cuerpo2" class="col-xs-2 col-sm-12 d-lg-none"  style="/*height: 700px;*/background-color:#white;">@yield('contenido-responsive')</div>


  </div>

</div>
<div class="contenido_footer" style="overflow: hidden;">    
  @yield('content-footer-prestador')
</div>



</body>
</html>
