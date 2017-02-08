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
		@include('ticket.create.primera')
		@include('ticket.create.segunda')
		@include('ticket.create.tercera')
		@include('ticket.create.cuarta')
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
	$(document).ready(function () {
		$('#empresa').change(function () {
			$('#id_usuario').html("<option value=''>Seleccione el usuario</option>");
			var datos = $('#empresa').val();
			var token = $('#token').val();
			//alert('entro');
			$.ajax({
				url:"{{route('tickets.cambiar')}}",
				type:'POST',
				headers: {'X-CSRF-TOKEN': token},
				data:{dato:datos},
				dataType:'JSON',
				success:function (argument) {
					$.each(argument, function(index, val) {
						 /*===========================================================
						 =            Iteraciones de usuarios registrados            =
						 ===========================================================*/
							$('#id_usuario').append(
								"<option value='"+val.id+"'>"+val.fullname+"</option>"
							);
						 /*=====  End of Iteraciones de usuarios registrados  ======*/
						 
					});
				}
			})
		});
	})
    </script>

@stop
