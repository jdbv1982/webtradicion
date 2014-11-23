@extends('layouts/layout')

@section('content')
    <div class="div-mensaje">
    	<div class="div-pregunta">{{ trans('edad.pregunta') }}</div>
    	<div class="div-respuesta"><a name="edad" href="{{route('SI')}}">{{ trans('edad.si') }}</a></div>
    	<div class="div-respuesta borde-lateral-izquierdo"><a href="{{route('salir')}}">{{ trans('edad.no') }}</a></div>
    	<div class="div-imagen"></div>
    </div>

@stop


