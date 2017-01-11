@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.register') }}	
@endsection
@section('contentheader_title')
	{{trans('adminlte_lang::message.clientes')}}
@stop
@section('contentheader_description')
	{{trans('adminlte_lang::message.register')}}
@stop
@section('ubicacion')
	{{ trans('adminlte_lang::message.clientes') }}</a></li>
    <li class="active">{{ trans('adminlte_lang::message.register') }}
@stop

@section('main-content')
	<!--<section class="content">-->
		@include('vehiculo.edit.primera')
		@include('vehiculo.edit.segunda')
		@include('vehiculo.edit.tercera')
		@include('vehiculo.edit.cuarta')
	<!--</section>-->
<!-- /.content -->
@endsection

@section('scripPagina')
	<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
    <script type="text/javascript">
    	$('#datepicker').datepicker({
      autoclose: true
    });
    </script>

@stop
