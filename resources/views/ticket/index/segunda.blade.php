<!--=================================================
=            Boton de solicitar servicio            =
==================================================-->
<div class="row">
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
  <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
    
  </div>
  <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>
<!--====  End of Boton de solicitar servicio  ====-->
<div class="row">
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
  
  <div class="box">
            <div class="box-header">
              <h3 class="box-title">Vehiculos registrados en el sistema</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id ="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Num</th>
                    <th>Ticket</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>ODC</th>
                    <th>Usuario</th>
                    <th>Estatus</th>
                  </tr>
                </thead>
                <tbody>
                @php 
                $count = 0;
                @endphp
                  @foreach ($ticket as $t)
                    @php 
                    $count++;
                    @endphp
                    <tr>
                      <td>{{$count}}</td>
                      <td>{{$t->numTicket}}</td>
                      <td>{{$t->fechaServicio}}</td>
                      <td>{{$t->horaServicio}}</td>
                      <td>{{$t->odc}}</td>
                      <td>{{$t->usuario->usuario->name}} {{$t->usuario->usuario->apellido}}</td>
                      <td>
                        @if ($t->estatus == 'Abierto')
                          <a href="{{route('tickets.cerrar', $t->id)}}" style="color: green;">Abierto</a>
                        @else
                          Cerrado
                        @endif
                      </td>
                      <td>
                        <a href="{{route('tickets.edit',$t->id)}}" class="btn btn-link">ver</a>
                      </td>
                    </tr>    
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>