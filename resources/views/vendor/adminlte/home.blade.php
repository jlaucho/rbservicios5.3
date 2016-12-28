@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}	
@endsection
@section('contentheader_description')
	{{trans('adminlte_lang::message.estadisticaSistema')}}
@stop

@section('main-content')
	<!--<section class="content">-->
		@include('home.primera')
		@include('home.segunda')
		@include('home.tercera')
		@include('home.cuarta')
	<!--</section>-->
<!-- /.content -->
@endsection
@section('scriptPagina')
	HOLA de des escript pagina
@stop
