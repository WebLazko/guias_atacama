
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
    <img src='http://www.escapadarural.com/blog/wp-content/uploads/2016/03/Costa-da-Morte-5.jpg'/> 

  </div>
  <div id="texto_imagen" class="col-10" style="width: max-content;">
      <div class="col-12" style="height: auto;">
        <h3 style="color: white; line-height: initial;margin-top: 5vw;">Costa</h3>
      </div>
  </div>
  <!-- Prestadores  -->
<div id="row_prestadores" class="row">
        <!-- Box1-->
      <!-- Widget white card -->


         <!-- Wrapper for slides -->
  
         <div class="carousel-inner" role="listbox" data-ride="carousel">

         <div class="item active">
            <div class="card text-center col-12" style="width:400px; padding-top: 20px;">
          <img class="card-img-top rounded-circle mx-auto" src="http://www.escapadarural.com/blog/wp-content/uploads/2016/03/Costa-da-Morte-5.jpg" alt="Card image" style="width:200px; height:200px;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="#" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>
        </div>

        <div class="item">
            <div class="card text-center col-12" style="width:400px; padding-top: 20px;">
          <img class="card-img-top rounded-circle mx-auto" src="http://www.escapadarural.com/blog/wp-content/uploads/2016/03/Costa-da-Morte-5.jpg" alt="Card image" style="width:200px; height:200px;">
          <div class="card-body">
            <h4 class="card-title">John Dose</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="#" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>
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
		<img style='height: 100%; width: 100%' src='http://www.escapadarural.com/blog/wp-content/uploads/2016/03/Costa-da-Morte-5.jpg'/> 
	</div>

	<div id="texto_imagen" class="col-8 col-lg-7" style="margin-top: -150px; right: 0; width: max-content;">
      <div class="col-xs-6 col-sm-12 col-lg-12" style="height: auto">
        <p style="color: white; line-height: initial;margin-top: 20px; font-size: 30px">Costa</p>
      </div>
  </div>

<!-- Prestadores -->
      <div id="row_prestadores" class="row">
        <!-- Box1-->

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="https://www.hola.com/imagenes/viajes/20180820128670/portugal-ruta-por-costa-estoril-cascais/0-593-332/cascais-t.jpg" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/33_PLAYARAMADA.png" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="https://s3-us-west-2.amazonaws.com/denomades/blog/wp-content/uploads/2018/01/18161848/portada-1000x600.jpg" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/28_PLAYABARRANQUILLA.png" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/23_PLAYABLANCADECARRIZALBAJO.png" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>

        <div class="card text-center col-4 col-sm-4 col-lg-4" style="width:400px; padding-top: 20px">
          <img class="card-img-top rounded-circle mx-auto" src="http://200.14.68.107/atacamaGoMultimedia/files/patrimonios/37_PLAYACHICADEHUASCO.png" alt="Card image" style="width:200px; height:22%;">
          <div class="card-body">
            <h4 class="card-title">John Doe</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="/prestadorServicios" class="btn btn-primary" style="background-color: #ff8e00; border-color:#ff8e00; ">Ver más</a>
          </div>
        </div>





      </div>
@endsection

