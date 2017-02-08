<!--=================================================
=            Cuadro de Formulario            =
==================================================-->
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
  
</div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Registro de {{ trans('adminlte_lang::message.ticket') }}</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      {!! Form::open(['route'=>'tickets.store', 'method'=>'POST']) !!}
      {!! Form::hidden('_token', csrf_token(), ['id'=>'token']) !!}
        <div class="box-body">
        <div class="row">
        <!--===================================================
        =            Lado Izquierdo del formulario            =
        ====================================================-->
        
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <!-- Cliente -->
              
              <div class="form-group">
                {!! Form::label('empresa', 'Seleccione el Cliente', []) !!}
                {!! Form::select('empresa', $cliente, null, ['class'=>'form-control', 'placeholder'=>'Seleccione el cliente']) !!}
              </div>
              <!-- Usuario -->
              
              <div class="form-group">
                {!! Form::label('id_usuario', 'Seleccione el Usuario', []) !!}
                {!! Form::select('id_usuario', ([''=>'Seleccione el usuario']), null, ['class'=>'form-control']) !!}
              </div>

              <!-- Fecha y hora -->
              
              <div class="form-group">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  {!! Form::label('fechaServicio', 'Fecha del servicio', []) !!}
                  {!! Form::text('fechaServicio', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la Fecha']) !!}
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  {!! Form::label('horaServicio', 'Hora del servicio', []) !!}
                  {!! Form::text('horaServicio', null, ['class'=>'form-control', 'placeholder'=>'Ingrese la Hora']) !!}
                </div>
              </div>

            </div>
            <!--=================================================
            =            Lado derecho del formulario            =
            ==================================================-->
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              
              <!-- Utiliza ODC para facturar -->
              
              <div class="form-group">
                {!! Form::label('odc', 'Requiere ODC', []) !!}
                {!! Form::select('odc', (['SI'=>'SI', 'NO'=>'NO']), null, ['class'=>'form-control', 'placeholder'=>'Seleccione']) !!}
              </div>
              <!-- Descripcion del servicio -->
              <div class="form-group">
                {!! Form::label('comentarioServicio', 'Responsabilidad Civil', []) !!}
                {!! Form::textarea('comentarioServicio', null, ['class'=>'form-control','placeholder'=>'Escriba su comentario referente al traslado...','style'=>'resize:none', 'rows'=>'5']) !!}
              </div>
            </div>
        </div>
        
        </div>
        <!-- Parte baja de formulario donde estan los botones -->
        
        <div class="box-footer">
          {!! Form::submit('Registrar Ticket', ['class'=>'btn btn-xs btn-primary']) !!}
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
