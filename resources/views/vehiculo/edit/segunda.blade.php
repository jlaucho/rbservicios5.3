<!--=================================================
=            Cuadro de Formulario            =
==================================================-->
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
  
</div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Edicion de {{ trans('adminlte_lang::message.vehiculos') }}</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      {!! Form::open(['route'=>['vehiculo.update',$ve], 'method'=>'PUT']) !!}
        <div class="box-body">
        <div class="row">
        <!--===================================================
        =            Lado Izquierdo del formulario            =
        ====================================================-->
        
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <!-- Marca del vehiculo -->
              
              <div class="form-group">
                {!! Form::label('marca', 'Marca', []) !!}
                {!! Form::text('marca', $ve->marca, ['class'=>'form-control', 'placeholder'=>'Ingrese la Marca']) !!}
              </div>
              <!-- Modelo del vehiculo -->
              
              <div class="form-group">
                {!! Form::label('modelo', 'Modelo', []) !!}
                {!! Form::text('modelo', $ve->modelo, ['class'=>'form-control', 'placeholder'=>'Ingrese el modelo']) !!}
              </div>

              <!-- Anio del Vehiculo -->
              
              <div class="form-group">
                {!! Form::label('anio', 'A&ntilde;o', []) !!}
                {!! Form::select('anio', (['2002'=>'2002','2003'=>'2003','2004'=>'2004','2005'=>'2005','2006'=>'2006','2007'=>'2007','2008'=>'2008','2009'=>'2009','2010'=>'2010','2011'=>'2011','2012'=>'2012','2013'=>'2013','2014'=>'2014','2015'=>'2015','2016'=>'2016','2017'=>'2017']), $ve->anio, ['class'=>'form-control', 'placeholder'=>'Seleccione el Año']) !!}
                
              </div>

            </div>
            <!--=================================================
            =            Lado derecho del formulario            =
            ==================================================-->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              
              <!-- Telefono de cliente -->
              
              <div class="form-group">
                {!! Form::label('placa', 'Placa', []) !!}
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                {!! Form::text('placa', $ve->placa, ['class'=>'form-control pull-right', 'placeholder'=>'Ingrese la placa']) !!}
                </div>
              </div>
              <!-- Descripcion del cliente -->
              <div class="form-group">
                {!! Form::label('responsabilidadCivil', 'Responsabilidad Civil', []) !!}
                {!! Form::text('responsabilidadCivil', $ve->responsabilidadCivil, ['class'=>'form-control','style'=>'resize:none', 'rows'=>'4','placeholder'=>'Ingrese la Fecha de Expiracion', 'id'=>'responsabilidadCivil']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('tipo', 'Tipo', []) !!}
                {!! Form::select('tipo', (['1'=>'1','2'=>'2']), $ve->tipo, ['class'=>'form-control', 'placeholder'=>'Seleccione el Tipo']) !!}
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          {!! Form::label('id_user', 'Seleccione el Conductor', []) !!}
          {!! Form::select('id_user', $con, $ve->id_user, ['class'=>'form-control', 'placeholder'=>'Seleccione el conductor']) !!}
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            
        </div>
        
        </div>
        <!-- Parte baja de formulario donde estan los botones -->
        
        <div class="box-footer">
          {!! Form::submit('Actualizar', ['class'=>'btn btn-xs btn-primary']) !!}
          <a href="{{route('vehiculo.index')}}" class='btn btn-link pull-right'>Volver</a>
        </div>
          <!--=====================================
          =            Fin de Formulario            =
          ======================================-->
        {!! Form::close() !!}
    </div>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
  
</div>
</div>
<!--====  End of Cuadro de Formulario  ====-->
