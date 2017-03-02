@extends('layouts.base')

@section('content')
@section('content')
<div class="row">
	<div class="col-md-12">
    {!! Alert::render() !!}
    @include('alerts.errors')
        <!-- BEGIN Portlet PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-table"></i>
                    Sorteo de Preguntas
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
            {!!Form::boton('Nuevo Alumno','#','green','fa fa-plus')!!}
            {!!Form::boton('Asistencia','#','green-meadow','fa fa-check')!!}
            {!!Form::boton('Padres con email pendiente','#','green-seagreen','fa fa-edit')!!}
            <p></p>
            </div>
        </div>
        <!-- END Portlet PORTLET-->
    </div>
</div>

@stop
@stop










@section('menu-user')
@include('menu.profile-admin')
@stop

@section('sidebar')
@include(Auth::user()->menu)
@stop

@section('userimg')
{{ asset('storage/fotos/'.Auth::user()->foto) }}
@stop

@section('username')
{!!Auth::user()->name!!}
@stop



@section('page-title')

@stop

@section('page-subtitle')

@stop



