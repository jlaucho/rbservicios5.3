<!--=================================================
=            Cuadro de Formulario            =
==================================================-->
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
  
</div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
  
  <div class="box box-primary">
      <div class="box-header with-border">
        <h3 class="box-title">Cierre de {{ trans('adminlte_lang::message.ticket') }}</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      
        <div class="box-body">
        <div class="row">
        <!--===================================================
        =            Lado Izquierdo del formulario            =
        ====================================================-->
        
            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
              <!-- Cliente -->
              
              <div class="form-group">
                {!! Form::label('empresa', 'Cliente', []) !!}
                {!! Form::label('empresa', $ticket->usuario->cliente->nameCli, ['class'=>'form-control']) !!}
              </div>
              <!-- Usuario -->
              
              <div class="form-group">
                {!! Form::label('id_usuario', 'Usuario', []) !!}
                @php 
                  $usuario = $ticket->usuario->usuario->name.' '.$ticket->usuario->usuario->apellido;
                @endphp
                {!! Form::label('id_usuario',$usuario , ['class'=>'form-control']) !!}
              </div>

              <!-- Fecha y hora -->
              
              <div class="form-group">
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group">
                  {!! Form::label('fechaServicio', 'Fecha de Servicio', []) !!}
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  {!! Form::label('fechaServicio',$ticket->fechaServicio , ['class'=>'form-control']) !!}
                </div>
                <!-- /.input group -->
              </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><div class="form-group">
                  {!! Form::label('horaServicio', 'Hora del servicio', []) !!}

                  <div class="bootstrap-timepicker">
                  <div class="input-group">
                  {!! Form::label('horaServicio',$ticket->horaServicio , ['class'=>'form-control']) !!}
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                </div>
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
                {!! Form::label('odc',$ticket->odc , ['class'=>'form-control']) !!}
              </div>
              <!-- Descripcion del servicio -->
              <div class="form-group">
                {!! Form::label('comentarioServicio', 'Comentario', []) !!}
                {!! Form::textarea('comentarioServicio', $ticket->comentarioServicio, ['class'=>'form-control','placeholder'=>'Escriba su comentario referente al traslado...','style'=>'resize:none', 'rows'=>'4', 'readonly']) !!}
              </div>
            </div>
        </div>
        
        </div>
        <!-- Parte baja de formulario donde estan los botones -->
        
        <div class="box-footer">
         
        </div>
</div>
          <!--=====================================
          =            Comuenzo de Formulario            =
          ======================================-->
      
      {!! Form::open(['route'=>'correo.store', 'method'=>'POST']) !!}
      {!! Form::hidden('_token', csrf_token(), ['id'=>'token']) !!}
      <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Detalle de {{ trans('adminlte_lang::message.servicio') }}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-striped">
              <legend class="small">Buenos día, por medio de la presente adjunto el detalle de servicio prestado  <span style="color: blue">(Servicio Prestado al Sr(a). {{$usuario}})</span></legend>
                <tr>
                  <th>Hrs. Espera</th>
                  <th>Cant. Desv. Inter</th>
                  <th>Cant. Desv. Exter</th>
                  <th>Cant. Pernoctas</th>
                  <th>Fin de semana</th>
                </tr>
                <tr>
                  <td>{!! Form::text('cantHoras', null, ['class'=>'form-control']) !!}</td>
                  <td>{!! Form::text('cantDesvinter', null, ['class'=>'form-control']) !!}</td>
                  <td>{!! Form::text('cantDesvExter', null, ['class'=>'form-control']) !!}</td>
                  <td>{!! Form::text('cantPernocta', null, ['class'=>'form-control']) !!}</td>
                  <td>{!! Form::checkbox('bonoFinSemana', 'NO', false, ['class'=>'minimal']) !!}</td>
                </tr>
                <tr>
                  <th colspan="3"><h3 class="box-title">Detalle de recorridos</h3></th>
                </tr>
                <tr>
                  <th>Origen</th>
                  <th>Destino</th>
                  <th>Km</th>
                  <th>Encomienda</th>
                  <th>Nocturno</th>
                  <th>Vacio</th>
                </tr>
                <tr>
                  <td>{!! Form::text('origen', null, ['class'=>'form-control']) !!}</td>
                  <td>{!! Form::text('destino', null, ['class'=>'form-control']) !!}</td>
                  <td>{!! Form::text('Km', null, ['class'=>'form-control']) !!}</td>
                  <td>{!! Form::checkbox('encomienda', 'NO', false, ['class'=>'minimal']) !!}</td>
                  <td>{!! Form::checkbox('bono_nocturno', 'NO', false, ['class'=>'minimal']) !!}</td>
                  <td>{!! Form::checkbox('vacio', 'NO', false, ['class'=>'minimal']) !!}</td>
                </tr>
                
              </table>
                <tr>
                  <td><h3><a style="color: green;" href="#" id="agregar"> <span class="fa fa-plus"></span></a><small> Agregar otra linea</small></h3></td>
                </tr>
            </div>
            <!-- /.box-body -->
          </div>
      {!! Form::submit('Cerrar Ticket', ['class'=>'btn btn-xs btn-primary']) !!}
      {!! Form::reset('Limpiar', ['class'=>'btn btn-xs btn-warning']) !!}
      {!! Form::close() !!}
    </div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
  
</div>
</div>
<!--====  End of Cuadro de Formulario  ====-->
