@extends('layouts.app')

@section('title')
    Encuesta | Datos sobre estrategias de salud.
@endsection

@section('content')
    <div class="container pad-top">
        <div class="row">
            <div class="col-12">
                <h1 class="title-surveys"> Datos sobre estrategias </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="{{ url('/strategies') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title"> Elementos de información y consulta que utiliza. </label></b>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Supervisión y consulta. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="SupervisionConsulta[]" value="Dispone de equipo de referencia COVID-19"> Dispone de equipo de referencia COVID-19.</label>
                                <span title="Encargado de informar, resolver dudas y supervisar el cumplimiento de las medidas establecidas.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="SupervisionConsulta[]" value="Ha definido un comité de supervisión"> Ha definido un comité de supervisión.</label>
                                <span title="Gestiona las medidas establecidas con un sistema de pronta respuesta, sanciones y alarma de contagios.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="SupervisionConsulta[]" value="Ha contratado personal especializado en salud"> Ha contratado personal especializado en salud.</label>
                                <span title="Detecta y toma decisiones sobre posibles casos de contagio. (médico/a, enfermero/a, otro)">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="SupervisionConsulta[]" value="Dispone de los datos de contacto para emergencia"> Dispone de los datos de contacto para emergencia.</label>
                                <span title="Incluye detección, aislamiento de posibles infectados, la comunicación y la revisión de personas que hayan estado en contacto.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="SupervisionConsulta[]" value="Dispone de un plan de acción en caso de contagios"> Dispone de un plan de acción en caso de contagios.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="SupervisionConsulta[]" value="Dispone de un plan de acción para casos sospechosos"> Dispone de un plan de acción para casos sospechosos.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="text-checkbox-type1"><input type="checkbox" name="SupervisionConsulta[]" value="Ha capacitado un equipo que efectué tareas de supervisión"> Ha capacitado un equipo que efectué tareas de supervisión.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Estrategia digital. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EstrategiaDigital[]" value="Usa códigos QR"> Usa códigos QR.</label>
                                <span title="Para impedir el contacto a través de tareas repetitivas o informativas.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EstrategiaDigital[]" value="App de intercambio"> App de intercambio.</label>
                                <span title="Transacciones en tiempo real sin necesidad de contacto físico entre los involucrados (por ejemplo recepción y escaneo de pedidos).">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EstrategiaDigital[]" value="Plataforma digital"> Plataforma digital.</label>
                                <span title="Plataforma digital eficiente para interacciones internas del centro de trabajo.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EstrategiaDigital[]" value="Sensor voluntario"> Sensor voluntario.</label>
                                <span title="Aplicación de celular que permite medir el flujo de tránsito de personas y la cercanía con personas que pudieran estar infectadas.">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EstrategiaDigital[]" value="Email / WhatsApp / SMS Marketing / Microservicios APP/ Sitio WEB Dinámico"> Email / WhatsApp / SMS Marketing / Microservicios APP/ Sitio WEB Dinámico.</label>
                                <span title="Tareas que se pueden digitalizar (por ejemplo emitir una cotización en línea, definir una estrategia de ventas digital, etc).">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-question-circle-fill" viewBox="0 0 16 16">
                                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.496 6.033h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286a.237.237 0 0 0 .241.247zm2.325 6.443c.61 0 1.029-.394 1.029-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94 0 .533.425.927 1.01.927z"/>
                                    </svg>
                                </span>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="EstrategiaDigital[]" value="Plataforma digital para el seguimiento y control de enfermos"> Plataforma digital para el seguimiento y control de enfermos.</label>
                                <span title="Una plataforma ditigal eficiente que ayude a recolectar datos de la evolución de la salud de los empleados.">
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
                            <b><label class="text-checkbox-title-distribution"> Normas y protocolos. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="NormasProtocolos[]" value="Ha establecido normas de comportamiento y ha informado sobre ellas"> Ha establecido normas de comportamiento y ha informado sobre ellas.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="NormasProtocolos[]" value="Ha definido protocolos de seguridad y los ha comunicado"> Ha definido protocolos de seguridad y los ha comunicado.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="NormasProtocolos[]" value="Certifica a las personas que los han recibido"> Certifica a las personas que los han recibido.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="NormasProtocolos[]" value="Cuenta y distribuye con un Manual de buenas practicas"> Cuenta y distribuye con un Manual de buenas practicas.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="text-checkbox-type1"><input type="checkbox" name="NormasProtocolos[]" value="Incentiva su seguimiento"> Incentiva su seguimiento.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Capacitación y comunicación. </label></b>
                        </div>
                    </div>
                    <div class="form-check">
                        <div class="row">
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="CapacitacionComunicacion[]" value="Ha colocado cartelería adecuada"> Ha colocado cartelería adecuada.</label>
                            </div>
                            <div class="col-6">
                                <label class="text-checkbox-type1"><input type="checkbox" name="CapacitacionComunicacion[]" value="Dispone de un sistema de información"> Dispone de un sistema de información.</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label class="text-checkbox-type1"><input type="checkbox" name="CapacitacionComunicacion[]" value="Dispone de un sistema de capacitación y prevención"> Dispone de un sistema de capacitación y prevención.</label>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-4">
                            <b><label class="text-checkbox-title-distribution"> Frecuencia de la comunicación sanitaria: </label></b>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="FrecuenciaDiaria"> <input class="form-check-input" type="radio" name="FrecuenciaSanitaria" value="Diaria" id="FrecuenciaDiaria" checked>
                                    Diaria.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="FrecuenciaSemanal"> <input class="form-check-input" type="radio" name="FrecuenciaSanitaria" value="Semanal" id="FrecuenciaSemanal">
                                    Semanal.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="FrecuenciaQuincenal"> <input class="form-check-input" type="radio" name="FrecuenciaSanitaria" value="Quincenal" id="FrecuenciaQuincenal">
                                    Quincenal.
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label text-checkbox-type1" for="FrecuenciaMensual"> <input class="form-check-input" type="radio" name="FrecuenciaSanitaria" value="Mensual" id="FrecuenciaMensual">
                                    Mensual.
                                </label>
                            </div>
                        </div>
                        <div class="col-8">
                            <b><label class="text-checkbox-title-distribution"> Otras acciones que ha promovido para formar a sus colaboradores: </label></b>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Indique cuáles (De lo contrario dejar el campo vacío)." name="AccionesPromovidas" value="{{ old('AccionesPromovidas') }}" bane></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-6">
                            <b><label class="text-checkbox-title-distribution"> Indicadores (KPI) que influyen en su productividad. </label></b>
                            <div class="form-check">
                                <label class="text-checkbox-type1"><input type="checkbox" name="IndicadoresKPI[]" value="Ha variado su capacidad productiva"> Ha variado su capacidad productiva.</label>
                                <label class="text-checkbox-type1"><input type="checkbox" name="IndicadoresKPI[]" value="Ha tenido que contratar personal extra"> Ha tenido que contratar personal extra.</label>
                                <label class="text-checkbox-type1"><input type="checkbox" name="IndicadoresKPI[]" value="Ha tenido que reducir personal"> Ha tenido que reducir personal.</label>
                                <label class="text-checkbox-type1"><input type="checkbox" name="IndicadoresKPI[]" value="Ha tenido que aumentar la rotación de puestos"> Ha tenido que aumentar la rotación de puestos.</label>
                            </div>
                        </div>
                        <div class="col-6">
                            <b><label class="text-checkbox-title-distribution"> Rediseño de roles (Especifique y agregue la información que considere pertinente de los restantes KPI). </label></b>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Indique cuáles (De lo contrario dejar el campo vacío)." name="RediseñoKPI" value="{{ old('RediseñoKPI') }}" bane></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Ha sufrido mas ausentismo por cuidado de personas (niños y/o adultos) Licencia por enfermedad (Especifique numero de personas por tipo). </label></b>
                        </div>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col-2">
                            <b><label class="text-checkbox-title-distribution"> COVID-19: </label></b>
                            <div class="form-group">
                                <input type="number" class="formcontrol text-box-distribution-number" id="AusentismoC19" name="AusentismoC19" value="{{ old('AusentismoC19') }}">
                            </div>
                        </div>
                        <div class="col-2">
                            <b><label class="text-checkbox-title-distribution"> Estrés: </label></b>
                            <div class="form-group">
                                <input type="number" class="formcontrol text-box-distribution-number" id="AusentismoEstres" name="AusentismoEstres" value="{{ old('AusentismoEstres') }}">
                            </div>
                        </div>
                        <div class="col-2">
                            <b><label class="text-checkbox-title-distribution"> Paciente de riesgo: </label></b>
                            <div class="form-group">
                                <input type="number" class="formcontrol text-box-distribution-number" id="AusentismoPacientesRiesgo" name="AusentismoPacientesRiesgo" value="{{ old('AusentismoPacientesRiesgo') }}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Otros (Indique causa): </label></b>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Indique cuáles (De lo contrario dejar el campo vacío)." name="AusentismoOtros" value="{{ old('AusentismoOtros') }}" bane></textarea>
                            </div>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-12">
                            <b><label class="text-checkbox-title-distribution"> Observaciones: </label></b>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Escribir observaciones respecto a algún elemento de la encuesta, si no hay observaciones lo puede dejar en blanco." name="Observaciones" value="{{ old('Observaciones') }}" bane></textarea>
                            </div>
                        </div>
                    </div>

                    <button type="submit" name="submit" id="submit" class="button-to-save float-right">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
