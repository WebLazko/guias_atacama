@extends('admin.template.main')

@section('title', 'Crear usuario')


@section('contenido')


@section('subtitulo')
    <h1 id="agregar_prestador"> Agregar Prestador</h1>
@endsection 

<script type="text/javascript" src="{{ asset('js/prueba.js') }}"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

{!! Form::open(['route' => 'users.store', 'method' =>'POST']) !!} <!-- ruta en route:list -->

  <!--===== NOMBRE  =====-->
    <div class="form-group">
      {!! Form::label('name', 'Nombre:') !!}
      {!!  Form::text('name', null, ['class' => 'form-control', 'required']) !!}
    </div>

    <!--===== DESCRIPCION =====-->
    <div class="form-group">
      {!! Form::label('desc', 'Descripción:') !!}
      {!!  Form::textarea('desc', null, ['class' => 'form-control']) !!}
    </div>

    <!--=====DIRECCION =====-->
    <!-- calle-->
    <h4 id="h4_seccion" >DIRECCIÓN</h4>
    <div class="form-group">
      {!! Form::label('calle', 'Calle:') !!}
      {!!  Form::text('calle', null, ['class' => 'form-control']) !!} 
    </div>

    <!-- numero-->
    <div id="numero_comuna" class="form-group col-xs-3 col-sm-3 col-lg-3">
      {!! Form::label('numero', 'Número:') !!}
      {!!  Form::text('numero', null, ['class' => 'form-control']) !!}
    </div>

    <!-- comuna-->
    <div id="numero_comuna" class="form-group col-xs-3 col-sm-3 col-lg-3">
      {!! Form::label('comuna', 'Comuna:') !!} <br>
      {!!  Form::select('comuna', 
                ['' =>  'Seleccione comuna',
                'arica' =>  'Arica',
                'iquique' =>  'Iquique',
                'copiapo' =>  'Copiapó'],
                ' ', ['class' => 'form-control']) !!}
    </div>


    <!--===== INFORMACION DE CONTACTO =====-->
    <!-- telefono-->
    <h4 id="h4_seccion">INFORMACIÓN DE CONTACTO</h4>
    <div class="form-group">
    {!! Form::label('telefono', 'Teléfono:') !!}
         <form name="add_telefono" id="add_telefono">  
            <div class="table-responsive">  
                <table class="table" id="dynamic_field_telefono" style="margin: -1% 0 auto 0.8%; width: auto;">  
                    <tr>  
                        <td><input type="number" name="name[]" class="form-control name_list" /></td>  
                        <td><button type="button" name="telefono_add" id="telefono_add" class="btn" style="color:white;background-color: #F4A81F"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
                    </tr>  
                </table>   
            </div>
         </form>  
    </div>

    <!-- correo -->
    <div class="form-group">
    {!! Form::label('correo', 'Correo:') !!}
         <form name="add_correo" id="add_correo">  
            <div class="table-responsive">  
                <table class="table" id="dynamic_field_correo" style="margin: -1% 0 auto 0.8%; width: auto;">  
                    <tr>  
                        <td><input type="mail" name="name[]" class="form-control name_list" /></td>  
                        <td><button type="button" name="correo_add" id="correo_add" class="btn" style="color:white;background-color: #F4A81F"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
                    </tr>  
                </table>   
            </div>
         </form>  
    </div>


    <!--=====IMÁGENES =====-->
    <!-- Logo-->
    <div class="form-group">
      {!! Form::label('logo', 'Logo:') !!} <br>
      <input name="logo" id='logo' type='file' accept='image/*'>
    </div>

    <!-- galeria -->
    {!! Form::label('galeria', 'Galería:') !!} <br>
    <div class="form-group">  
        <form name="add_name" id="add_name">
          <div class="table-responsive">
            <table class="table" id="dynamic_field" style="margin-top: -1%; margin-left: -0.4%;">
              <tr>
                <td><input type="file" id="input_imagen" name="name[]" class="form-control name_list" accept="image/*"/></td>
                <td><button type="button" name="add" id="add" class="btn"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
              </tr>
            </table>
          </div>
        </form>  
    </div>  


    <!--===== SERVICIOS =====-->
    <!-- Tipo servicio-->
    <h4 id="h4_seccion" >SERVICIOS</h4>
    <div class="form-group">
    {!! Form::label('tipo_servicio', 'Tipo de servicio:') !!}
    {!!  Form::select('tipo_servicio', 
                ['' =>  'Seleccione tipo de servicio',
                'servicio1' =>  'Servicio 1',
                'servicio2' =>  'Servicio 2',
                'servicio3' =>  'Servicio 3'],
                ' ', ['class' => 'form-control']) !!}

    <!-- Descripcion -->
    <div class="form-group">
      {!! Form::label('desc2', 'Descripción:') !!}
      {!!  Form::textarea('desc2', null, ['class' => 'form-control']) !!}
    </div>
    <!-- Precio -->
    <div class="form-group">
      {!! Form::label('precio', 'Precio:') !!} <br>
      {!!  Form::number('precio', null, ['class' => 'form-control', 'required']) !!}
    </div>
    <!-- imagen-->
    {!! Form::label('galeria', 'Galería:') !!} <br>
    <div class="form-group">  
        <form name="add_name" id="add_name">
          <div class="table-responsive">
            <table class="table" id="dynamic_field2" style="margin-top: -1%; margin-left: -0.4%;">
              <tr>
                <td><input type="file" id="input_imagen" name="name[]" class="form-control name_list" accept="image/*"/></td>
                <td><button type="button" name="add2" id="add2" class="btn"><i class="fa fa-plus" aria-hidden="true"></i></button></td>
              </tr>
            </table>
          </div>
        </form>  
    </div>  

    <div class="from-group" style="text-align: -webkit-center;margin-top: 5%;margin-bottom: 5%;">
    {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
    {!! Form::reset('Limpiar', ['class' => 'btn btn-danger']) !!}
  </div>


    {!! Form::close() !!}
      
<script src="{{ asset('customFile/custom-file-input.js') }}"></script>
@endsection