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
              <h3 class="box-title">Usuarios registrados en el sistema</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id ="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Num</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>E-mail</th>
                    <th>Tipo</th>
                    <th>Modificar</th>
                  </tr>
                </thead>
                <tbody>
                @php 
                $count = 0;
                @endphp
                  @foreach ($usu as $u)
                    @php 
                    $count++;
                    @endphp
                    <tr>
                      <td>{{$count}}</td>
                      <td>{{$u->name}}</td>
                      <td>{{$u->apellido}}</td>
                      <td>{{$u->email}}</td>
                      <td>{{$u->type}}</td>
                      <td>
                        <a href="{{route('usuarios.edit',$u->id)}}" class="btn btn-link">ver</a>
                      </td>
                    </tr>    
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Num</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>E-mail</th>
                    <th>Tipo</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
</div>
<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1"></div>
</div>