@extends('layouts.base')

@section('content')

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



