@extends('layouts.app')

@section('title')
    Pagina principal.
@endsection

@section('content')
<!-- <div class="container pad-top">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h1 class="title-surveys"> Acerca de nosotros </h1>
        </div>
    </div>
</div> -->
<div class="container-fluid header-about-us">
    <div class="row text-about-us">
        <div class="col-12">
            <h1> Acerca de nosotros </h1>
        </div>
    </div>
    <hr>
    <div class="row text-about-us-text">
        <div class="col-12">
            <h1> Esta página está dedicada a ayudar a las empresas, para ello primero es necesario que una
                persona a cargo se registre en la página o inicie sesión. Una vez dentro aparecerán diferentes
                opciones entre las cuales deberá seleccionar la encuesta. Al contestar la encuesta se mostrará
                una página con el puntaje que servirá de guía. Después de un tiempo se enviará un correo el cual
                contendrá otro análisis más profundo con recomendaciones tomando en consideración las respuestas
                proporcionadas, también puede optar por enviarnos un mensaje mediante la página de contacto.
            </h1>
        </div>
    </div>
</div>

<div class="container pad-top">
    <div class="row">
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-building margin-icons" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.763.075A.5.5 0 0 1 15 .5v15a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5V14h-1v1.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V10a.5.5 0 0 1 .342-.474L6 7.64V4.5a.5.5 0 0 1 .276-.447l8-4a.5.5 0 0 1 .487.022zM6 8.694L1 10.36V15h5V8.694zM7 15h2v-1.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5V15h2V1.309l-7 3.5V15z"/>
                    <path d="M2 11h1v1H2v-1zm2 0h1v1H4v-1zm-2 2h1v1H2v-1zm2 0h1v1H4v-1zm4-4h1v1H8V9zm2 0h1v1h-1V9zm-2 2h1v1H8v-1zm2 0h1v1h-1v-1zm2-2h1v1h-1V9zm0 2h1v1h-1v-1zM8 7h1v1H8V7zm2 0h1v1h-1V7zm2 0h1v1h-1V7zM8 5h1v1H8V5zm2 0h1v1h-1V5zm2 0h1v1h-1V5zm0-2h1v1h-1V3z"/>
                </svg>
                <hr>
                <div class="card-body">
                  <p class="card-text"> Nosotros somos una organización que busca ayudar a las empresas sobre todo ahora que esta la problemática
                    por el covid-19 mediante una encuesta  donde las respuestas proporcionadas nos ayudaran a dar una recomendación mucho mas
                    extensa y mejor explicada. </p>
                  <i class="bi bi-chat-quote-fill"></i>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-people margin-icons" viewBox="0 0 16 16">
                    <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.978-1A.261.261 0 0 1 7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002a.274.274 0 0 1-.014.002H7.022zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10A5.493 5.493 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
                </svg>
                <hr>
                <div class="card-body">
                  <p class="card-text"> El objetivo es que pueda tener información clara sobre acciones realizadas o a seguir, datos para definir
                      un plan de acción, equipo de apoyo, procesos y productos óptimos que cumplan con los más altos estándares informados por
                      el CDC y la OMS. </p>
                  <i class="bi bi-chat-quote-fill"></i>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card" style="width: 18rem;">
                <svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" fill="currentColor" class="bi bi-chat-left-dots margin-icons" viewBox="0 0 16 16">
                    <path d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                    <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                </svg>
                <hr>
                <div class="card-body">
                  <p class="card-text"> Contamos con un formulario en el cual se deben proporcionar los datos necesarios y enviarlo para que nos
                      podamos poner en contacto de vuelta y poder ponernos en contacto y ayudar de mejor manera para encontrar una respuesta
                      o solución óptima. </p>
                  <i class="bi bi-chat-quote-fill"></i>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
