@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}	
@endsection
@section('contentheader_description')
	{{trans('adminlte_lang::message.estadisticaSistema')}}
@stop

@section('main-content')
	<!--<section class="content">-->
		@include('inicio.primera')
		@include('inicio.segunda')
		@include('inicio.tercera')
		@include('inicio.cuarta')
	<!--</section>-->
<!-- /.content -->
@endsection
