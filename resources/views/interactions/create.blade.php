@extends('layouts.app')

@section('title')
    Encuesta | Datos sobre interacciones.
@endsection

@section('content')
    <div class="container pad-top">
        <div class="row">
            <div class="col-12">
                <h1 class="title-surveys"> Datos sobre interacciones </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ url('/interactions') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title"> Gestion entre la interaccion de las personas. </label></b>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Promoción de la salud. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Información física y virtualmente"> Información física y virtualmente.</label>
                                <span title="por ejemplo sobre el SARS COVID-19.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Desarrolla campañas"> Desarrolla campañas.</label>
                                <span title="Campañas de buena higiene y hábitos saludables.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Promueve la limpieza y la desinfección"> Promueve la limpieza y la desinfección.</label>
                                <span title="Para espacios y objetos personales.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Establece un programa de capacitación y guía"> Establece un programa de capacitación y guía.</label>
                                <span title="Para acciones en caso de idenfiticar sospechosos de contagio o reporte de mal uso de espacios.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Dispone de cartelería en zonas clave con la información"> Dispone de cartelería en zonas clave con la información.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Sanitiza a fondo los espacios"> Sanitiza a fondo los espacios.</label>
                                <span title="Espacios públicos y áreas de trabajo internas del centro de trabajo.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Ofrece equipos de protección individual completos"> Ofrece equipos de protección individual completos.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Ofrece guantes y mascarilla"> Ofrece guantes y mascarilla.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Ofrece gel sanitizante"> Ofrece gel sanitizante.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Ha definido recorridos internos"> Ha definido recorridos internos.</label>
                                <span title="Hablando dentro del establecimiento para evitar contacto excesivo.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Tiene accesos controlados"> Tiene accesos controlados.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="PromocionSalud[]" value="Tiene un protocolo de gestión de deshechos y materiales susceptibles de estar contaminados"> Tiene un protocolo de gestión de deshechos y materiales susceptibles de estar contaminados.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Distancia interpersonal. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha informado sobre la distancia mínima requerida"> Ha informado sobre la distancia mínima requerida.</label>
                                <span title="Distancia mínima requerida en el espacio de trabajo es de 1.5 mts.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha señalizado las distancias"> Ha señalizado las distancias.</label>
                                <span title="Hablando de distancias permitidas en cada área del espacio de trabajo.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha reorganizado los espacios de trabajo"> Ha reorganizado los espacios de trabajo.</label>
                                <span title="Para evitar aglomeraciones dentro del trabajo.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha adicionado barreras físicas en el espacio de trabajo"> Ha adicionado barreras físicas en el espacio de trabajo.</label>
                                <span title="Para cuidar la distancia y evitar aglomeraciones.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="text-checkbox-type1"><input type="checkbox" name="DistanciaInterpersonal[]" value="Ha reducido el mobiliario en los espacios de trabajo para minimizar el riesgo de aglomeración"> Ha reducido el mobiliario en los espacios de trabajo para minimizar el riesgo de aglomeración.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Control de Ingreso-Egreso. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Ha formado un equipo para gestionar los accesos"> Ha formado un equipo para gestionar los accesos.</label>
                                <span title="Controla que las personas no presenten sintomas asociados al COVID-19.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Cuenta con un espacio especifico de ingreso-egreso"> Cuenta con un espacio especifico de ingreso-egreso.</label>
                                <span title="Se controlan los síntomas y se entregan materiales de protección individual.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Dispone de un sistema de autodiagnóstico"> Dispone de un sistema de autodiagnóstico.</label>
                                <span title="Para que las personas evalúen si están infectadas o en riesgo.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Dispone de un sistema de monitoreo a distancia"> Dispone de un sistema de monitoreo a distancia.</label>
                                <span title="Termómetro a distancia o cámara infrarroja y visión por computadora para monitorear el ingreso-egreso.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Dispone de un sistema de telemedicina"> Dispone de un sistema de telemedicina.</label>
                                <span title="Equipos de telemetría que miden las constantes vitales de las personas.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlIngresoEgreso[]" value="Implementar un sistema de telemedicina avanzado"> Implementar un sistema de telemedicina avanzado.</label>
                                <span title="Con telemetría, diagnóstico y procesamiento de datos con IA, asi como seguimiento y control de casos sospechosos.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Acceso de visitantes y proveedores. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Ha definido un protocolo de acceso de personas externas"> Ha definido un protocolo de acceso de personas externas.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Se informa a personas externas de las normas en el interior"> Se informa a personas externas de las normas en el interior.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Ofrece material protector a los visitantes"> Ofrece material protector a los visitantes.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Dispone de un espacio de recepción aislado"> Dispone de un espacio de recepción aislado.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Existe un protocolo de recepción de mercancías de transportistas"> Existe un protocolo de recepción de mercancías de transportistas.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="AccesoVisitantesProveedores[]" value="Desinfecta las mercancías recibidas"> Desinfecta las mercancías recibidas.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Control de visitas y despacho de mercancías hacia el exterior. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Tiene un protocolo de empleados que realizan visitas a Clientes externos"> Tiene un protocolo de empleados que realizan visitas a Clientes externos.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Dispone de un sistema de recepción de pedidos desde el exterior"> Dispone de un sistema de recepción de pedidos desde el exterior.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Dispone de un sistema de gestión de salida de pedidos"> Dispone de un sistema de gestión de salida de pedidos.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Existe un protocolo de entrega hacia transportistas externos"> Existe un protocolo de entrega hacia transportistas externos.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Dispone de una zona de entrega seguro"> Dispone de una zona de entrega seguro.</label>
                                <span title="Zona de delivery.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="ControlVisitas[]" value="Dispone de un sistema de entrega seguro"> Dispone de un sistema de entrega seguro.</label>
                                <span title="Proceso de delivery.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <button type="submit" name="submit" id="submit" class="button-to-save float-right">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
