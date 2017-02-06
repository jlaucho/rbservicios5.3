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
              <h3 class="box-title">Clientes registrados en el sistema</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id ="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Num</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>A&ntilde;o</th>
                    <th>Cunductor</th>
                    <th>Tipo</th>
                  </tr>
                </thead>
                <tbody>
                @php 
                $count = 0;
                @endphp
                  @foreach ($vehiculo as $ve)
                    @php 
                    $count++;
                    @endphp
                    <tr>
                      <td>{{$count}}</td>
                      <td>{{$ve->marca}}</td>
                      <td>{{$ve->modelo}}</td>
                      <td>{{$ve->anio}}</td>
                      <td>{{$ve->conductor->name}} {{$ve->conductor->apellido}}</td>
                      <td>{{$ve->tipo}}</td>
                      <td>
                        <a href="{{route('vehiculo.edit',$ve->id)}}" class="btn btn-link">ver</a>
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