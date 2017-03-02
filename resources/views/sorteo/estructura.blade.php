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
                    Estructura de Sorteo
                </div>
                <div class="tools">
                    <a href="javascript:;" class="collapse"> </a>
                    <a href="" class="fullscreen"> </a>
                    <a href="javascript:;" class="remove"> </a>
                </div>
            </div>
            <div class="portlet-body">
            {!! Form::open(['route'=>'sorteo.estructura.store','method'=>'POST']) !!}
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            {!! Form::label('lblCantidad', 'Cantidad Preguntas', ['class'=>'control-label']) !!}
                            {!! Form::text('cantidad', null, ['class'=>'form-control','placeholder'=>'Cantidad']) !!}
                        </div>
                    </div><!--/span-->
                    <div class="col-md-9">
                        <div class="form-group">
                            {!! Form::label('lblCategoria', 'Categoria', ['class'=>'control-label col-md-12']) !!}
                            <div class="col-md-12">
                            {!! Form::select('categoria[]', $categoria_all,null, ['id'=>'CategoriaMS','class'=>'form-control','data-width'=>'100%','multiple'=>'multiple']) !!}
                            </div>
                        </div>
                    </div><!--/span-->
                </div>
                {!!Form::enviar('Guardar')!!}
            {!! Form::close() !!}
            <p></p>
            <table class="table table-bordered table-hover" data-toggle="table" data-pagination="true">
                <thead>
                    <tr>
                        <th> Cantidad</th>
                        <th> Categoria </th>
                        <th> Opciones </th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($Lista as $item)
                    <tr >
                        <td> {{ $item->cantidad }} </td>
                        <td>
                            <ul>
                            @foreach ($item->detalles as $detalle)
                                <li>{{ $detalle->categoria }}</li>
                            @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href="{{route('sorteo.estructura.delete',$item->id)}}" title="Eliminar" class="btn -btn-icon-only red">
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th> Total: {{ $Lista->sum('cantidad') }}</th>
                    </tr>
                </tfoot>
            </table>
            </div>
        </div>
        <!-- END Portlet PORTLET-->
    </div>
</div>

@stop

@section('js-scripts')
<script>
$(function() {
    $("#CategoriaMS").multiselect();
});
</script>
@stop



@section('plugins-styles')
{!! Html::style('assets/global/plugins/bootstrap-table/bootstrap-table.min.css') !!}
{!! Html::style('assets/global/plugins/bootstrap-multiselect/css/bootstrap-multiselect.css') !!}
@stop

@section('plugins-js')
{!! Html::script('assets/global/plugins/jquery-ui/jquery-ui.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-table/bootstrap-table.min.js') !!}
{!! Html::script('assets/global/plugins/bootstrap-multiselect/js/bootstrap-multiselect.js') !!}
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



