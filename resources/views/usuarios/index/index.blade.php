@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}	
@endsection
@section('contentheader_title')
	{{trans('adminlte_lang::message.usuarios')}}
@stop
@section('contentheader_description')
	{{trans('adminlte_lang::message.estadisticaSistema')}}
@stop
@section('ubicacion')
	{{ trans('adminlte_lang::message.usuarios') }}</a></li>
    <li class="active">{{ trans('adminlte_lang::message.home') }}
@stop

@section('main-content')
	<!--<section class="content">-->
		@include('usuarios.index.primera')
		@include('usuarios.index.segunda')
		@include('usuarios.index.tercera')
		@include('usuarios.index.cuarta')
	<!--</section>-->
<!-- /.content -->
@endsection
@section('scriptPagina')
		<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
	<script type="text/javascript">
		 $("#example1").DataTable();
	</script>
@stop
