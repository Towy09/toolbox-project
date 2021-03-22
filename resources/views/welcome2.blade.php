@extends('layouts.app')

@section('title')
    Bienvenido | Página de bienvenida.
@endsection

@section('content')
<div class="container-fluid header-home pad-top">
    <div class="row text-home">
        <div class="col-12">
            <h1> ¡Bienvenidos al TOOL-BOX DIÁGNÓSTICO! Esta herramienta lo va a ayudar a establecer de manera rápida cuál es la situación en la que se encuentra su empresa y/o negocio, en relación a los protocolos y sanitización óptima requerida para la apertura </h1>
        </div>
        <div class="col-12">
            <a href="about_us"> Ver más </a>
        </div>
    </div>
</div>
<div class="container-fluid header-contactus pad-top">
    <div class="row text-survey">
        <div class="col-12">
            <h1> ¿Quiere saber en que estado se encuentra su empresa? </h1>
        </div>
        <div class="col-12">
            <a href="survey"> Realizar encuesta </a>
        </div>
    </div>
</div>
<div class="container-fluid header-survey pad-top">
    <div class="row text-contactus">
        <div class="col-12">
            <h1> Si necesita hablar directamente con nosotros. </h1>
        </div>
        <div class="col-12">
            <a href="contact_us"> Contáctanos </a>
        </div>
    </div>
</div>
@endsection
