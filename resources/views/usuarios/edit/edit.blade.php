@extends('adminlte::layouts.app')

@section('linkStyles')
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen/chosen.min.css')}}">
@stop
@section('htmlheader_title')
	{{ trans('adminlte_lang::message.edit') }}	
@endsection
@section('contentheader_title')
	{{trans('adminlte_lang::message.usuarios')}}
@stop
@section('contentheader_description')
	{{trans('adminlte_lang::message.edit')}}
@stop
@section('ubicacion')
	{{ trans('adminlte_lang::message.usuarios') }}</a></li>
    <li class="active">{{ trans('adminlte_lang::message.edit') }}
@stop

@section('main-content')
	<!--<section class="content">-->
		@include('usuarios.edit.primera')
		@include('usuarios.edit.segunda')
		@include('usuarios.edit.tercera')
		@include('usuarios.edit.cuarta')
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
    		$('#Cliente').chosen();
    		$('#type').change(function() {
    			var type = $('#type').val();
    			if(type == 'usuario_cliente'){
					$('#Cliente').attr('required', true);
    				$('#displayEmpresa').attr({
    					'style':'visibility:visible',
    				});
    			}else{
    				$('#Cliente').attr('required', false);
    				$('#displayEmpresa').attr({
    					'style':'visibility:hidden'
    				});
    			}
    		});
    	});
    </script>

@stop
