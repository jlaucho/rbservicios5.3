<!--=================================================
=            Cuadro de Formulario            =
==================================================-->
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
  
</div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Registro de {{ trans('adminlte_lang::message.clientes') }}</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      {!! Form::open(['route'=>['cliente.update', $cli, $cli->id], 'method'=>'PUT']) !!}
        <div class="box-body">
        <div class="row">
        <!--===================================================
        =            Lado Izquierdo del formulario            =
        ====================================================-->
        
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <!-- Nomnre de Cliente -->
              
              <div class="form-group">
                {!! Form::label('nameCli', 'Nombre', []) !!}
                {!! Form::text('nameCli', $cli->nameCli, ['class'=>'form-control', 'placeholder'=>'Ingrese el nombre']) !!}
              </div>
              <!-- RIF o Cedula de cliente -->
              
              <div class="form-group">
                {!! Form::label('RIF_CedulaCli', 'RIF ó Cedula', []) !!}
                {!! Form::text('RIF_CedulaCli', $cli->RIF_CedulaCli, ['class'=>'form-control', 'placeholder'=>'Ingrese el RIF o la ceduda']) !!}
              </div>
              <!-- Direccion de Ciente -->
              
              <div class="form-group">
                {!! Form::label('direccionCli', 'Dirección', []) !!}
                {!! Form::text('direccionCli', $cli->direccionCli, ['class'=>'form-control', 'placeholder'=>'Ingrese la direccion']) !!}
              </div>
            </div>
            <!--=================================================
            =            Lado derecho del formulario            =
            ==================================================-->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              
              <!-- Telefono de cliente -->
              
              <div class="form-group">
                {!! Form::label('telefonoCli', 'Telefono', []) !!}
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div>
                {!! Form::text('telefonoCli', $cli->telefonoCli, ['class'=>'form-control pull-right', 'placeholder'=>'Ingrese el Telefono']) !!}
                </div>
              </div>
              <!-- Descripcion del cliente -->
              <div class="form-group">
                {!! Form::label('descripcionCli', 'Descripción', []) !!}
                {!! Form::textarea('descripcionCli', $cli->descripcionCli, ['class'=>'form-control','style'=>'resize:none', 'rows'=>'4','placeholder'=>'Ingrese la direccion']) !!}
              </div>
            </div>
        </div>
        
        </div>
        <!-- Parte baja de formulario donde estan los botones -->
        
        <div class="box-footer">
          {!! Form::submit('Actualizar', ['class'=>'btn btn-xs btn-success']) !!}
          {!! Form::reset('Limpiar', ['class'=>'btn btn-xs btn-warning']) !!}
          <a href="{{route('cliente.index')}}" class="pull-right">Volver</a>
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
