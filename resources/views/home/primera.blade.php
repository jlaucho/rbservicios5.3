	<!--=====================================
  =            Section comentario de informacion            =
  ======================================-->
  
  <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Información</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Contraer">
              <i class="fa fa-plus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Eliminar">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body collapse">
          Para solicitar un servicio debe dirigirse a la seccion de <strong>Tickets de servicio -> Generar tickets de servicio</strong>, luego completar la información solicitada para la generacion del tickets, por el cual le puede realizar seguimiento dentro del sistema
        </div>
        <!-- /.box-body -->
        <div class="box-footer collapse">
          <SMALL>RB Servicios C.A, imnovando para brindar el mejor servicio. <strong>GRACIAS POR PREFERIRNOS !!!</strong></SMALL>
        </div>
        <!-- /.box-footer-->
      </div>
  
  <!--====  End of Section comentario de informacion  ====-->
  

  <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-cubes"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{trans('adminlte_lang::message.ordenesPendientes')}}</span>
              <span class="info-box-number">12<small></small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-folder-open-o"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{trans('adminlte_lang::message.ticketsAbiertos')}}</span>
              <span class="info-box-number">12</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-clipboard"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{trans('adminlte_lang::message.facturasPendientes')}}</span>
              <span class="info-box-number">15</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
          <a href="#" style="color: black;">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">{{trans('adminlte_lang::message.solicitarServicio')}}</span>
              <span class="info-box-number">Solicitar</span>
            </div>
            <!-- /.info-box-content -->
          </a>
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- row -->
    
    