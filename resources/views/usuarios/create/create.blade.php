@extends('adminlte::layouts.app')

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
    <script type="text/javascript">
    	$('#datepicker').datepicker({
      autoclose: true
    });
    	$(document).ready(function(){
    		$('#type').change(function() {
    			var type = $('#type').val();
    			if(type == 'usuario_cliente'){
    				$('#displayEmpresa').attr('style','visibility:visible');
    				/*$.ajax({
    					url: '/path/to/file',
    					type: 'default GET (Other values: POST)',
    					dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
    					data: {param1: 'value1'},
    				})
    				.done(function() {
    					console.log("success");
    				})
    				.fail(function() {
    					console.log("error");
    				})
    				.always(function() {
    					console.log("complete");
    				});*/
    				
    			}else{
    				$('#displayEmpresa').attr('style','visibility:hidden');
    			}
    		});
    	});
    </script>

@stop
