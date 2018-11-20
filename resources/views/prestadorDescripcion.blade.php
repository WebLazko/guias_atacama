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

@section('contenido')
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
	<div id="acabado_en_punta" class="row" style="position: absolute;">
	</div>

	<!-- Imagen-->
	<div class="row" style="display: none;">
		<div id="imagen_prestador_descripcion" class="responsive">
  			<div class="gallery">
      				<img src="images/desierto.jpg" alt="Cinque Terre" width="600" height="400">
  			</div>
  			<div class="col-lg-12 col-sm-6 text-center mb-4" style="background-color: #FFFFFF;">
  			</div>
		</div>
	</div>

	<!-- Descripcion -->
	<div class="row caja col-xs-6 col-lg-12 center-block text-center" >
		<div class="col-xs-12 col-lg-12 center-block text-center" style="margin-left: 2%">
			<h1 id="subtitulo_prestador">DESCRIPCIÓN</h1>
		</div>
	</div>
	<div>
		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</div>

	<!-- Seccion Precio -->
	<div class="col-xs-12 col-lg-12 center-block text-center" style="margin-top: 4%; margin-bottom: 10%;">
		<p id="p_precio">Precio:<h1 id="precio" >$XXXXXX</h1></p>
	</div>

@endsection


@section('logo')
    <figure style="margin: 0 -9% 0 -9%">
      <img src="images/guias_de_atacama_2.png">
    </figure>
    <figure style="margin: 0 -9% 0 -9%">
      <img src="images/imagen-no-encontrada.jpg">
    </figure>
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
	<div id="acabado_en_punta" class="row" style="position: absolute;">
	</div>


	<div class="row" style="display: none;">
			<div id="imagen_prestador_descripcion" class="responsive">
	  			<div class="gallery">
	      				<img src="images/desierto.jpg" alt="Cinque Terre" width="600" height="400">
	  			</div>
	  			<div class="col-lg-12 col-sm-6 text-center mb-4" style="background-color: #FFFFFF;">
	  			</div>
			</div>
	</div>

	<!-- Descripcion -->
	<div class="row col-xs-6 col-lg-12 center-block text-center" >
		<div class="col-xs-12 col-lg-12 center-block text-center" style="margin-left: 2%">
			<h3 id="subtitulo_prestador">DESCRIPCIÓN</h3>
			<hr style="margin-left: -10px;border-top: 2px solid #6c757d;margin-right: -35px;" >
		</div>
	</div>
	<div>
		<p style="font-size: small;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
	</div>

	<!-- Seccion Precio -->
	<div class="col-xs-12 col-lg-12 center-block text-center" style="margin-top: 4%; margin-bottom: 10%;">
		<p id="p_precio">Precio:<h1 id="precio" >$XXXXXX</h1></p>
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



