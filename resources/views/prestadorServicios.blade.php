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
#espan_galeria_cajas, #espan_logo{
	position: relative;
    float: left;
    width:  100%;
    height: 175px;
    background-position: 50% 50%;
    background-repeat:   no-repeat;
    background-size:     cover;
    margin-right: 20px;
}

@media(max-width: 768px){
	#espan_galeria, #espan_galeria_cajas{
		height: 14% !important;
	}
}
</style>

@extends('template.master-prestador')
@section('logo')
    <figure style="margin: 0 -9% 0 -9%">
      <img src="images/guias_de_atacama_2.png">
    </figure>
    <figure style="margin: 0 -9% 0 -9%">
      <img src="images/imagen-no-encontrada.jpg">
    </figure>
@endsection


@section('content-master')
	<div id="canvas_imagen" class="row" style='height: 200px; width: 720px;'>
		<img style='height: 100%; width: 100%' src='images/mountain.jpg'/> 
	</div>

	<div id="texto_imagen" class="col-8 col-lg-7" style="margin-top: -150px; right: 0;">
      <div class="col-xs-6 col-sm-12 col-lg-12" style="height: auto">
        <p style="color: white; line-height: initial;margin-top: 20px; font-size: 30px">Nombre Prestador</p>
      </div>
  </div>

	<div class="row" style="background-color: #147F77; height: 50px">
		<div class="col-xs-12 col-lg-12 center-block text-center">
			<p style="color: white; margin-top: 1.5%">DESCRIPCIÓN BREVE DE SERVICIO OFRECIDO</p>
		</div>
	</div>

	<!-- acabado en punta-->
	<div id="acabado_en_punta" class="row">
	</div>

	<!-- cajas -->
	@for ($i = 0; $i < 2; $i++)
		<div class="responsive0">
  			<div class="gallery">
    			<a target="_blank">
      				<span id="espan_galeria_cajas" style="background-image: url('images/desierto.jpg');"></span>
    			</a>
    			<div class="desc" style="background-color: #147F77; display: -webkit-box"> </div>
  			</div>
		</div>
	@endfor

	<!-- Seccion servicios -->
	<div class="row caja col-xs-6 col-lg-12 center-block text-center" >
		<div class="col-xs-12 col-lg-12 center-block text-center" style="margin-left: 2%">
			<h1 id="subtitulo_prestador">SERVICIOS</h1>
		</div>
	</div>

	<!-- Seccion box servicios -->
	<div class="row">
	@for ($i = 0; $i < 6; $i++)
		<div id="imagen_{{ $i }}" class="responsive">
  			<div class="gallery">
      				<span id="espan_galeria" style="background-image: url('images/desierto.jpg');"></span>
    			<div class="descripcion" style="background-color: #E3B42A; color: white">DESCRIPCIÓN</div>
  			</div>
  			<div class="col-lg-12 col-sm-12 text-center mb-4" style="background-color: #FFFFFF;">
  				<a href="/prestadorDescripcion"><button id="boton_prestador" class="button" style="vertical-align:middle; margin-top: -80%"><span>Ver más</span></button></a>
  			</div>
		</div>
	@endfor
	</div>

@endsection

                    <!--==  RESPONSIVE  ==-->
  <!-- canvas-->
@section('content-responsive')
	<div class="row" style='height: 200px'>
		<img style='height: 100%; width: 100%' src='images/mountain.jpg'/> 
	

	<div id="texto_imagen" class="col-10">
      <div class="col-12" style="height: auto;">
        <h5 style="color: white; line-height: initial;margin-top: 5vw;">Nombre Prestador</h5>
      </div>
  </div>

	</div>

	<div class="row" style="background-color: #147F77; height: 35px">
		<div class="col-xs-12 col-lg-12 center-block text-center">
			<p id="p_descripcion_servicio" style="color: white; margin-top: 1.5%">DESCRIPCIÓN BREVE DE SERVICIO OFRECIDO</p>
		</div>
	</div>
	<!-- acabado en punta-->
	<div id="acabado_en_punta" class="row"></div>

	<!-- caja imagen-->
	<div>
  			<div class="gallery" style="text-align: -webkit-center;">
    			<a target="_blank">
      				<img src="images/desierto.jpg" style="width: 75%;">
    			</a>
    			<div class="desc" style="background-color: #147F77; width:75%;"> </div>
  			</div>
	</div>


	<!-- Seccion servicio -->
	<div class="row col-xs-6 col-lg-12 center-block text-center" >
		<div class="col-xs-12 col-lg-12 center-block text-center" style="margin-left: 2%">
			<h3 id="subtitulo_prestador">SERVICIOS</h3>
			<hr style="margin-left: -10px;border-top: 2px solid #6c757d;margin-right: -35px;" >
		</div>
	</div>

	<!-- box servicio -->
	<div id="imagen">
  			<div class="gallery" style="text-align: -webkit-center;">
      				<img src="images/imagen-no-encontrada.jpg" style="width: 75%">
    			<div class="descripcion" style="background-color: #E3B42A; color: white">DESCRIPCIÓN</div>
  			</div>
  			<div class="col-lg-12 col-sm-12 text-center mb-4" style="background-color: #FFFFFF;">
  				<a href="/prestadorDescripcion"><button id="boton_prestador" class="button" style="vertical-align:middle; margin-top: -80%"><span>Ver más</span></button></a>
  			</div>
	</div>


<!-- 
	<div class="row">
	@for ($i = 0; $i < 4; $i++)
		<div id="imagen_" class="responsive">
  			<div class="gallery">
      			<span id="espan_galeria" style="background-image: url('images/imagen-no-encontrada.jpg');"></span>
  			</div>
		</div>
	@endfor
	</div> 

-->
@endsection