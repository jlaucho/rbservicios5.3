@extends('adminlte::layouts.app')

@section('linkStyles')
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen/chosen.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/datepicker/datepicker3.css')}}">
@stop
@section('htmlheader_title')
	{{ trans('adminlte_lang::message.register') }}	
@endsection
@section('contentheader_title')
	{{trans('adminlte_lang::message.usuarios')}}
@stop
@section('contentheader_description')
	{{trans('adminlte_lang::message.register')}}
@stop
@section('ubicacion')
	{{ trans('adminlte_lang::message.usuarios') }}</a></li>
    <li class="active">{{ trans('adminlte_lang::message.register') }}
@stop

@section('main-content')
	<!--<section class="content">-->
		@include('usuarios.create.primera')
		@include('usuarios.create.segunda')
		@include('usuarios.create.tercera')
		@include('usuarios.create.cuarta')
	<!--</section>-->
<!-- /.content -->
@endsection

@section('scriptPagina')
	<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('plugins/chosen/chosen.jquery.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
    	$('#datepicker').datepicker({
      autoclose: true
    });
    	$(document).ready(function(){
            $('#id_cliente').val('');
    		$('#id_cliente').chosen();
    		$('#type').change(function() {
    			var type = $('#type').val();
    			if(type == 'usuario_cliente'){
					$('#id_cliente').attr('required', true);
    				$('#displayEmpresa').attr({
    					'style':'visibility:visible',
    				});
    			}else{
    				$('#id_cliente').attr('required', false);
    				$('#displayEmpresa').attr({
    					'style':'visibility:hidden'
    				});
    			}
    		});
    	});
    </script>

@stop
