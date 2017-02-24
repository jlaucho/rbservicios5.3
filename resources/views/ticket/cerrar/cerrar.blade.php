@extends('adminlte::layouts.app')

@section('linkStyles')
	<link rel="stylesheet" href="{{asset('plugins/iCheck/all.css')}}">
@stop

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.cierre') }}	
@endsection
@section('contentheader_title')
	{{trans('adminlte_lang::message.ticketsAbiertos')}}
@stop
@section('contentheader_description')
	{{trans('adminlte_lang::message.cierre')}}
@stop
@section('ubicacion')
	{{ trans('adminlte_lang::message.ticketsAbiertos') }}</a></li>
    <li class="active">{{ trans('adminlte_lang::message.cierre') }}
@stop

@section('main-content')
	<!--<section class="content">-->
		@include('ticket.cerrar.primera')
		@include('ticket.cerrar.segunda')
		@include('ticket.cerrar.tercera')
		@include('ticket.cerrar.cuarta')
	<!--</section>-->
<!-- /.content -->
@endsection

@section('scriptPagina')
	<script src="{{asset('plugins/iCheck/icheck.min.js')}}"></script>
	<script type="text/javascript">
		$('input[type="checkbox"].minimal').iCheck({
	      checkboxClass: 'icheckbox_minimal-blue',
	      radioClass: 'iradio_minimal-blue'
	    });
	    $(document).ready(function(){
	    	$('#agregar').click(function (event) {
	    		event.preventDefault()
	    		alert('le dio click');
	    		$('#tabla').append(
					"<tr>"+
	                  "<td>{!! Form::text('origen', null, ['class'=>'form-control']) !!}</td><td>{!! Form::text('destino', null, ['class'=>'form-control']) !!}</td><td>{!! Form::text('Km', null, ['class'=>'form-control']) !!}</td><td>{!! Form::checkbox('encomienda', 'NO', false, ['class'=>'minimal']) !!}</td><td>{!! Form::checkbox('bono_nocturno', 'NO', false, ['class'=>'minimal']) !!}</td><td>{!! Form::checkbox('vacio', 'NO', false, ['class'=>'minimal']) !!}</td></tr>"
				);
	    	})
	    });
	</script>

@stop
