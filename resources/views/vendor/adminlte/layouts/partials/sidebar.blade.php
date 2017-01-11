<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('avatar/'.Auth::user()->img) }}" class="img-circle" alt="70" width="70" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            
            <li class="active treeview">
                <a href="{{ url('home') }}">
                    <i class='fa fa-dashboard'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a>
            </li>

            <!--=========================================
            =            Seccion de Usuarios            =
            ==========================================-->
            

            <li>
              <a href="#"><i class="fa fa-users"></i> <span>{{ trans('adminlte_lang::message.usuarios') }}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('usuarios.create')}}"><i class="fa fa-save"></i> <span>{{ trans('adminlte_lang::message.register') }}</span></a></li>
                <li><a href="{{route('usuarios.index')}}"><i class="fa fa-list"></i> <span>{{ trans('adminlte_lang::message.listar') }}</span></a></li>
              </ul>
            </li>
            
            <!--=========================================
            =            Seccion de Clientes            =
            ==========================================-->
            

            <li>
              <a href="#"><i class="fa fa-bar-chart"></i> <span>{{ trans('adminlte_lang::message.clientes') }}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{route('cliente.create')}}"><i class="fa fa-save"></i> <span>{{ trans('adminlte_lang::message.register') }}</span></a></li>
                <li><a href="{{route('cliente.index')}}"><i class="fa fa-list"></i> <span>{{ trans('adminlte_lang::message.listar') }}</span></a></li>
              </ul>
            </li>
            <!--==========================================
            =            Seccion de Vehiculos            =
            ===========================================-->
            

            <li>
              <a href="#"><i class="fa fa-car"></i> <span>{{ trans('adminlte_lang::message.vehiculos') }}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-save"></i> <span>{{ trans('adminlte_lang::message.register') }}</span></a></li>
                <li><a href="#"><i class="fa fa-list"></i> <span>{{ trans('adminlte_lang::message.listar') }}</span></a></li>
              </ul>
            </li>
            <!--==========================================
            =            Seccion de Tikets de Servicios  =
            ===========================================-->
            

            <li>
              <a href="#"><i class="fa fa-sticky-note-o"></i> <span>{{ trans('adminlte_lang::message.ticketsServicios') }}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.ticketGenerar') }}</span></a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.ticketCerrar') }}</span></a></li>
              </ul>
            </li>
            <!--=========================================
            =            Seccion de facturas            =
            ==========================================-->
            
            <li>
              <a href="#"><i class="fa fa-suitcase"></i> <span>{{ trans('adminlte_lang::message.facturas') }}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-save"></i> <span>{{ trans('adminlte_lang::message.generar') }}</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.orden') }}</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.facturas') }}</span></a></li>
                    </ul>
                </li>
              </ul>
            </li>
            
            
            <!--=========================================
            =            Seccion de Reportes            =
            ==========================================-->
            
            <li>
              <a href="#"><i class="fa fa-book"></i> <span>{{ trans('adminlte_lang::message.reportes') }}</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <!-- usuarios -->
              
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-users"></i> <span>{{ trans('adminlte_lang::message.usuarios') }}</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.register') }}</span></a></li>
                    </ul>
                </li>
              </ul>
              <!-- conductores -->
              
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-car"></i> <span>{{ trans('adminlte_lang::message.conductores') }}</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.trabajos') }}</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.pagos') }}</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.vehiculos') }}</span></a></li>
                    </ul>
                </li>
              </ul>
              <!-- Tickets de Servicio -->
              
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-sticky-note-o"></i> <span>{{ trans('adminlte_lang::message.buscarTicket') }}</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-search"></i> <span>{{ trans('adminlte_lang::message.search') }}</span></a></li>
                    </ul>
                </li>
              </ul>


              <!-- ODC -->
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-server"></i> <span>{{ trans('adminlte_lang::message.odc') }}</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.todas') }}</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.pendientes') }}</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.rangoFecha') }}</span></a></li>
                    </ul>
                </li>
              </ul>
              <!-- Facturas -->
              

              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-line-chart"></i> <span>{{ trans('adminlte_lang::message.facturas') }}</span>
                        <span class="pull-right-container">
                          <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>

                    <ul class="treeview-menu">
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.todas') }}</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.pendientes') }}</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.rangoFecha') }}</span></a></li>
                        <li><a href="#"><i class="fa fa-circle-o"></i> <span>{{ trans('adminlte_lang::message.pagadas') }}</span></a></li>
                    </ul>
                </li>
              </ul>
              
            </li>
            
            
            <!--====  Final de secciones  ====-->
            

           
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
