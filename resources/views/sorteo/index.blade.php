@extends('layouts.base')

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
            {!!Form::boton('Sortear Preguntas',route('sorteo.sortear'),'blue','fa fa-arrows')!!}
            {!!Form::boton('Preguntas sorteadas',route('preguntas.sorteadas'),'green-meadow','fa fa-bars')!!}
            {!!Form::boton('Imprimir',route('preguntas.imprimir'),'green-seagreen','fa fa-file-pdf-o')!!}
            <p></p>
            <table class="table table-bordered table-hover" data-toggle="table" data-pagination="true">
                <thead>
                    <tr>
                        <th> Nro</th>
                        <th> nombre</th>
                        <th> Categoria </th>
                        <th> Sorteado </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Lista as $item)
                    <tr >
                        <td> {{ $loop->iteration }} </td>
                        <td> {{ $item->nombre }} </td>
                        <td> {{ $item->categoria }} </td>
                        <td> {!! $item->es_sorteado !!} </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <!-- END Portlet PORTLET-->
    </div>
</div>

@stop



@section('plugins-styles')
{!! Html::style('assets/global/plugins/bootstrap-table/bootstrap-table.min.css') !!}
@stop

@section('plugins-js')
{!! Html::script('assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-table/bootstrap-table.min.js') !!}
@stop


@section('menu-user')
@include('menu.profile-admin')
@stop

@section('sidebar')
@include(Auth::user()->menu)
@stop

@section('user-img')
{{ asset('storage/fotos/'.Auth::user()->foto) }}
@stop

@section('username')
{!!Auth::user()->name!!}
@stop



@section('page-title')

@stop

@section('page-subtitle')

@stop



