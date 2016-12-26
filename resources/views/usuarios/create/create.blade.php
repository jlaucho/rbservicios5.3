@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.register') }}	
@endsection
@section('contentheader_description')
	{{trans('adminlte_lang::message.register')}}
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
