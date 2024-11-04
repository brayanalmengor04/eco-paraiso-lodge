@extends("template.template") 
@section("title","Hotel EcoParaíso Lodge - Conexión Natural y Comodidad") 
@section("content")  
@if(session('message'))
    <div class="alert alert-success" role="alert">
        {{ session('message') }}
    </div>
@endif
<div id="app"></div>  
@stop
