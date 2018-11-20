<style>
  .contenido_footer{
    display: none;
  }
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


@media(max-width: 320px){
  #jcarousel_wrapper_header{
            margin: 18% auto 1% !important;
    }
}

@media(max-width: 768px){

}

</style>

@extends('template.master')

@section('logo')
    <figure style="margin: 0 -9% 0 -9%">
      <img src="images/guias_de_atacama.png">
    </figure>
@endsection


                    <!--==  RESPONSIVE  ==-->
  <!-- canvas-->
@section('content-responsive')
  <div class="row" style='height: 200px'>
    <img src='http://www.hdfondos.net/file/2021/728x410/16:9/suiza-alpes-valle_1562722861.jpg'/> 

  </div>
  <div id="texto_imagen" class="col-10" style="width: max-content;">
      <div class="col-12" style="height: auto;">
        <h3 style="color: white; line-height: initial;margin-top: 5vw;">Valle</h3>
      </div>
  </div>
  <!-- Prestadores  -->
<div id="row_prestadores" class="row">
        <!-- Box1-->
        <div class="card text-center col-12" style="width:400px; padding-top: 20px;">
          <img class="card-img-top rounded-circle mx-auto" src="http://www.hdfondos.net/file/2021/728x410/16:9/suiza-alpes-valle_1562722861.jpg" alt="Card image" style="width:200px; height:200px;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>
</div>

            <!-- Prestador -->
<!-- 

<div class="row" style="background-color: white; margin-top: -23px;">
  @for ($i = 0; $i < 4; $i++)
    <div id="imagen_" class="responsive">
        <div class="gallery">
            <span id="espan_galeria" style="background-image: url('images/imagen-no-encontrada.jpg');"></span>
        </div>
    </div>
  @endfor
  </div> 

  <div class="row" style="background-color: #B56D28; display: none">
  <a id="mapa" href="#"><i class="fa fa-chevron-right" aria-hiden="true"></i>&nbsp&nbspMAPA</a>
</div>
 -->
@endsection

<!-- ==FIN RESPONSIVE  ==-->




@section('content-master')

	<div id="canvas_imagen" class="row" style='height: 200px; width: 720px;'>
		<img style='height: 100%; width: 100%' src='http://www.hdfondos.net/file/2021/728x410/16:9/suiza-alpes-valle_1562722861.jpg'/> 
	</div>

	<div id="texto_imagen" class="col-8 col-lg-7" style="margin-top: -150px; right: 0; width: max-content;">
      <div class="col-xs-6 col-sm-12 col-lg-12" style="height: auto">
        <p style="color: white; line-height: initial;margin-top: 20px; font-size: 30px">Valle</p>
      </div>
  </div>

<!-- Prestadores -->
      <div id="row_prestadores" class="row">
        <!-- Box1-->

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/159_2016-02-18-08-47-15.png" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/159_2016-02-18-08-46-51.png" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/159_2016-02-18-08-46-27.png" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/159_2016-02-18-08-45-30.png" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/159_PARRONALESVALLEDECOPIAP%C3%93.png" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/161_32027111.jpg" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>





      </div>
@endsection