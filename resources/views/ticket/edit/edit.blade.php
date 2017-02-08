@extends('adminlte::layouts.app')

@section('linkStyles')
	<link rel="stylesheet" type="text/css" href="{{asset('plugins/chosen/chosen.min.css')}}">
@stop

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.register') }}	
@endsection
@section('contentheader_title')
	{{trans('adminlte_lang::message.ticketGenerar')}}
@stop
@section('contentheader_description')
	{{trans('adminlte_lang::message.register')}}
@stop
@section('ubicacion')
	{{ trans('adminlte_lang::message.ticketGenerar') }}</a></li>
    <li class="active">{{ trans('adminlte_lang::message.register') }}
@stop

@section('main-content')
	<!--<section class="content">-->
		@include('ticket.edit.primera')
		@include('ticket.edit.segunda')
		@include('ticket.edit.tercera')
		@include('ticket.edit.cuarta')
	<!--</section>-->
<!-- /.content -->
@endsection

@section('scriptPagina')
	<script src="{{asset('plugins/datepicker/bootstrap-datepicker.js')}}"></script>
	<script src="{{asset('plugins/chosen/chosen.jquery.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
    	$('#responsabilidadCivil').datepicker({
      autoclose: true
    });

    $(document).ready(function(){
    		$('#id_user').chosen();
    	});
    </script>

@stop
