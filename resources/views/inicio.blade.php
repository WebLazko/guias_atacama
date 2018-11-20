<style>
#espan_galeria {
    position: relative;
    float: left;
    width:  100%;
    height: 120px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
    margin-right: 20px;

}
#espan_logo{
  position: relative;
    float: left;
    width:  100%;
    height: 175px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
    margin-right: 20px;
}
#barra_navegacion_todo{
  display: none;
}
#jcarousel_wrapper_header{
  margin-top: 0 !important;

}
#wrapper_carrusel{
  padding-top: 1% !important;
}

@media(max-width: 425px){
  #jcarousel_wrapper_header{
    margin: 18% auto 15% !important;
    position: relative;
    border: 10px solid #ff8e00;
    width: 85% !important;
    height: 110px !important;
  }

}



@media(max-width: 320px){
  .jcarousel li{
    
    height: 90px !important;
  }
  #jcarousel_wrapper_header{
      margin: 22% auto 20% !important;
  }
}



@media(max-width: 575px){
  #jcarousel_wrapper_header{
    margin-top: 10% ;
  }
}
</style>

@extends('template.master')
@section('content-responsive')

  <!--== DIV INVISIBLE ==-->
  <div class="row contenido_inicio" style="height: 400px">
      10 razones para preferir guías de ataca-
      <br>
      Código ético mundial para el turismo
  </div>

   <!-- Seccion Logos-->


      <!-- Seccion mapa -->
  <div class="row" style="background-color: #B56D28; display: none">
  <a id="mapa" href="#"><i class="fa fa-chevron-right" aria-hiden="true"></i>&nbsp&nbspMAPA</a>
</div>
      <!-- Seccion Login-->
<div class="row" style="background-color: #f6902a; display: none;">
  <a id="iniciar_sesion" href="#">Iniciar sesión</a>
</div><hr id="hr_iniciar_sesion">
@endsection


  <!--== FIN DIV INVISIBLE ==-->


@section('content-master')
  
<nav id="barra_navegacion" class="row navbar navbar-expand-sm">
  <!-- Links -->
  <ul class="navbar-nav col-sm-12 col-lg-12">
    <li class="nav-item col-lg-4">
      <a id="costa" class="nav-link" href="/costa">Costa</a>
    </li>
    <li class="nav-item col-lg-4">
      <a id="valle" class="nav-link" href="/valle">Valle</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item col-lg-4">
      <a id="Cordillera" class="nav-link" href="/montana">Montaña</a>
    </li>
</nav>
  	
  <div class="contenido_inicio">
  		10 razones para preferir guías de ataca-
  		<br>
  		Código ético mundial para el turismo
  </div>
@endsection

@section('logo')
    <figure style="margin: 0 -9% 0 -9%">
      <img src="images/guias_de_atacama.png">
    </figure>
   

    <div class="row" style="background-color: #B56D28">
      <a id="mapa" href="#"><i class="fa fa-chevron-right" aria-hiden="true"></i>&nbsp&nbspMAPA</a>
    </div>
    
    <div class="row" style="background-color: #f6902a">
      <a id="iniciar_sesion" href="#">Iniciar sesión</a>
    </div><hr id="hr_iniciar_sesion">

@endsection

