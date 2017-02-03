<!--=================================================
=            Cuadro de Formulario            =
==================================================-->
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
  
</div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Registro de {{ trans('adminlte_lang::message.vehiculos') }}</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      {!! Form::open(['route'=>'vehiculo.store', 'method'=>'POST']) !!}
        <div class="box-body">
        <div class="row">
        <!--===================================================
        =            Lado Izquierdo del formulario            =
        ====================================================-->
        
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <!-- Marca del vehiculo -->
              
              <div class="form-group">
                {!! Form::label('marca', 'Marca', []) !!}
                {!! Form::text('marca', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la Marca']) !!}
              </div>
              <!-- Modelo del vehiculo -->
              
              <div class="form-group">
                {!! Form::label('modelo', 'Modelo', []) !!}
                {!! Form::text('modelo', null, ['class'=>'form-control', 'placeholder'=>'Ingrese el modelo']) !!}
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
                {!! Form::text('placa', null, ['class'=>'form-control pull-right', 'placeholder'=>'Ingrese la placa']) !!}
                </div>
              </div>
              <!-- Descripcion del cliente -->
              <div class="form-group">
                {!! Form::label('responsabilidadCivil', 'Responsabilidad Civil', []) !!}
                {!! Form::text('responsabilidadCivil', null, ['class'=>'form-control','style'=>'resize:none', 'rows'=>'4','placeholder'=>'Ingrese la Fecha de Expiracion', 'id'=>'responsabilidadCivil']) !!}
              </div>
            </div>
        </div>
        <div class="row">
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
          <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
          {!! Form::label('id_user', 'Seleccione el Conductor', []) !!}
          {!! Form::select('id_user', $con, null, ['class'=>'form-control', 'placeholder'=>'Seleccione el conductor']) !!}
          </div>
          <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2"></div>
            
        </div>
        
        </div>
        <!-- Parte baja de formulario donde estan los botones -->
        
        <div class="box-footer">
          {!! Form::submit('Registrar', ['class'=>'btn btn-xs btn-primary']) !!}
          {!! Form::reset('Limpiar', ['class'=>'btn btn-xs btn-warning']) !!}
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
