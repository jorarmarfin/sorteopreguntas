@extends('layouts.base')

@section('menu-user')
@include('admin.menu-profile')
@stop

@section('name-user')
{!!Auth::user()->name!!}
@stop

@section('page-title')
Panel de
@stop

@section('page-subtitle')
  Administracion
@stop

@section('content')

@stop

@section('sidebar')
@include('admin.menu')
@stop
