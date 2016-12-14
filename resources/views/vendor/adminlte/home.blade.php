@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">{{trans('adminlte_lang::message.home')}}</div>

					<div class="panel-body">
						{{ trans('adminlte_lang::message.logged') }}
						{!! Form::text('algo', null, ['placeholder'=>trans('adminlte_lang::message.yourname')]) !!}
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
